<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactSubmissionResource\Pages;
use App\Models\ContactSubmission;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContactSubmissionResource extends Resource
{
    protected static ?string $model = ContactSubmission::class;
    protected static ?string $navigationIcon = 'heroicon-o-inbox';
    protected static ?string $navigationLabel = 'Contact Messages';
    protected static ?string $navigationGroup = 'Inquiries';
    protected static ?int $navigationSort = 1;
    protected static ?string $modelLabel = 'Message';
    protected static ?string $pluralModelLabel = 'Messages';

    public static function canCreate(): bool
    {
        return false; // Read-only — no manual creation
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('is_read')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-envelope')
                    ->trueColor('success')
                    ->falseColor('warning')
                    ->label('Read'),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('email')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('subject')->limit(40)->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->label('Received'),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_read')
                    ->label('Read Status')
                    ->trueLabel('Read')
                    ->falseLabel('Unread'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            Infolists\Components\Section::make('Contact Details')->schema([
                Infolists\Components\TextEntry::make('name'),
                Infolists\Components\TextEntry::make('email')
                    ->url(fn($record) => 'mailto:' . $record->email),
                Infolists\Components\TextEntry::make('phone')
                    ->visible(fn($record) => !empty($record->phone)),
                Infolists\Components\TextEntry::make('subject')
                    ->visible(fn($record) => !empty($record->subject)),
            ])->columns(2),
            Infolists\Components\Section::make('Message')->schema([
                Infolists\Components\TextEntry::make('message')
                    ->prose()
                    ->columnSpanFull(),
            ]),
            Infolists\Components\Section::make('Metadata')->schema([
                Infolists\Components\TextEntry::make('source_page')->label('Source'),
                Infolists\Components\TextEntry::make('ip_address')->label('IP Address'),
                Infolists\Components\TextEntry::make('created_at')->dateTime()->label('Received At'),
            ])->columns(3)->collapsed(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactSubmissions::route('/'),
            'view' => Pages\ViewContactSubmission::route('/{record}'),
        ];
    }
}
