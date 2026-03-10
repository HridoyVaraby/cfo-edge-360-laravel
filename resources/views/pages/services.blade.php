@extends('layouts.app')

@section('title', 'Our Services - CFO Edge 360')
@section('meta_description', 'Comprehensive virtual CFO services: Financial Strategy, Cash Flow Optimization, Investor Reporting, Global Compliance, KPI Analytics, M&A Support, and Financial Operations Setup.')

@section('content')
    @php
        $services = [
            [
                'id' => 'strategy',
                'icon' => '/icons/analysis.png',
                'title' => 'Financial Strategy & Forecasting',
                'description' => [
                    'Strategic financial planning forms the backbone of successful business growth. Our comprehensive approach includes developing multi-year financial models, scenario planning, and growth roadmaps that align with your business objectives.',
                    'We create detailed forecasting models that help you understand potential outcomes under different market conditions, enabling informed decision-making and strategic pivots when necessary.',
                    'Our strategic planning process includes competitive analysis, market opportunity assessment, and resource allocation optimization to maximize your return on investment and accelerate sustainable growth.'
                ]
            ],
            [
                'id' => 'cashflow',
                'icon' => '/icons/circular-economy.png',
                'title' => 'Cash Flow & Working Capital Optimization',
                'description' => [
                    'Effective cash flow management is critical for business survival and growth. We provide comprehensive liquidity management services, including cash flow forecasting, burn rate analysis, and working capital optimization strategies.',
                    'Our approach includes implementing robust cash management processes, optimizing payment terms with suppliers and customers, and establishing credit facilities to ensure adequate liquidity during growth phases or market downturns.',
                    'We help you understand your cash conversion cycle, identify opportunities to accelerate receivables collection, optimize inventory levels, and strategically manage payables to improve overall working capital efficiency.'
                ]
            ],
            [
                'id' => 'reporting',
                'icon' => '/icons/report.png',
                'title' => 'Investor & Board Reporting',
                'description' => [
                    'Professional-grade financial reporting is essential for maintaining investor confidence and board oversight. We create comprehensive monthly and quarterly reports that provide clear insights into business performance and key metrics.',
                    'Our reporting packages include executive summaries, detailed financial statements, variance analysis, and forward-looking commentary that helps stakeholders understand both current performance and future opportunities.',
                    'We specialize in creating compelling board presentations and investor updates that effectively communicate your business story, highlighting achievements, addressing challenges, and outlining strategic initiatives for continued growth.'
                ]
            ],
            [
                'id' => 'global',
                'icon' => '/icons/global-connection.png',
                'title' => 'Global Expansion & Compliance',
                'description' => [
                    'International expansion requires expert navigation of complex regulatory environments and accounting standards. We provide guidance on US GAAP, IFRS, and local accounting requirements across multiple jurisdictions.',
                    'Our global compliance services include international tax planning, transfer pricing strategies, and regulatory compliance management to ensure your expansion efforts meet all legal and financial requirements.',
                    'We help establish international financial operations, including subsidiary setup, intercompany agreements, and consolidated reporting processes that support efficient global business management.'
                ]
            ],
            [
                'id' => 'analytics',
                'icon' => '/icons/analytics.png',
                'title' => 'KPI Dashboard & Analytics',
                'description' => [
                    'Real-time visibility into business performance is crucial for effective management. We design and implement comprehensive KPI dashboards that provide instant access to critical business metrics and performance indicators.',
                    'Our analytics solutions include custom metric design, automated reporting systems, and performance tracking tools that help you monitor progress against strategic objectives and identify trends before they impact results.',
                    'We create executive dashboards that consolidate key performance indicators from across your organization, providing a single source of truth for business performance and enabling data-driven decision making at all levels.'
                ]
            ],
            [
                'id' => 'ma',
                'icon' => '/icons/customer-service.png',
                'title' => 'M&A and Fundraising Support',
                'description' => [
                    'Mergers, acquisitions, and fundraising activities require specialized financial expertise and meticulous preparation. We provide comprehensive due diligence support, including financial analysis, risk assessment, and valuation modeling.',
                    'Our fundraising support includes preparing detailed financial projections, creating compelling investor presentations, and developing comprehensive data rooms that showcase your business opportunity to potential investors.',
                    'We assist with deal structuring, negotiation support, and post-transaction integration planning to ensure successful outcomes and maximize value creation from strategic transactions.'
                ]
            ],
            [
                'id' => 'operations',
                'icon' => '/icons/settings.png',
                'title' => 'Financial Operations Setup',
                'description' => [
                    'Robust financial systems and processes are essential for scalable business growth. We help establish comprehensive accounting systems, implement automation tools, and design efficient financial processes that grow with your business.',
                    'Our operational setup services include chart of accounts design, financial controls implementation, and process documentation that ensures accuracy, compliance, and efficiency in your financial operations.',
                    'We provide ongoing support for system optimization, staff training, and process improvement initiatives that enhance the effectiveness of your financial operations and support long-term business success.'
                ]
            ],
        ];
    @endphp

    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-white">
        <x-page-hero title="Our Services"
            description="Comprehensive virtual CFO services designed to accelerate your business growth and optimize financial performance across all operational areas." />

        <section class="py-12 sm:py-16 bg-white">
            <div class="mx-auto max-w-7xl">
                <div class="space-y-0">
                    @foreach($services as $index => $service)
                        @php $isEven = $index % 2 === 0; @endphp
                        <div id="{{ $service['id'] }}"
                            class="{{ $isEven ? 'bg-gradient-to-br from-gray-900 via-slate-800 to-gray-900 border-gray-700 rounded-md' : 'bg-white border-gray-200' }} border-b last:border-b-0">
                            <div class="px-4 py-16 sm:py-20 sm:px-6 lg:px-8">
                                <div
                                    class="grid lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 items-center max-w-6xl mx-auto {{ !$isEven ? 'lg:grid-flow-col-dense' : '' }}">
                                    <div class="space-y-6 sm:space-y-8 {{ !$isEven ? 'lg:col-start-2' : '' }}">
                                        <div class="space-y-4">
                                            <div class="flex items-center space-x-4">
                                                <div
                                                    class="flex h-14 w-14 sm:h-16 sm:w-16 items-center justify-center rounded-2xl bg-white shadow-lg flex-shrink-0 p-2">
                                                    <img src="{{ asset($service['icon']) }}" alt="{{ $service['title'] }}"
                                                        class="h-full w-full object-contain">
                                                </div>
                                                <div class="flex-1">
                                                    <span
                                                        class="inline-block px-3 py-1 {{ $isEven ? 'bg-amber-500/20 text-amber-300' : 'bg-amber-100 text-amber-800' }} text-xs font-medium rounded-full mb-2">Service
                                                        #{{ $index + 1 }}</span>
                                                    <h2
                                                        class="text-2xl sm:text-3xl lg:text-4xl font-bold {{ $isEven ? 'text-white' : 'text-gray-900' }} font-serif leading-tight">
                                                        {{ $service['title'] }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-y-4 sm:space-y-5">
                                            @foreach($service['description'] as $paragraph)
                                                <p
                                                    class="text-base sm:text-lg {{ $isEven ? 'text-gray-300' : 'text-gray-700' }} leading-relaxed">
                                                    {{ $paragraph }}</p>
                                            @endforeach
                                        </div>
                                        <div class="pt-4">
                                            <a href="{{ url('/contact') }}"
                                                class="inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 bg-amber-500 text-white font-semibold rounded-xl hover:bg-gray-900 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 min-h-[44px] text-sm sm:text-base">
                                                Get Started with {{ explode(' ', $service['title'])[0] }}
                                                {{ explode(' ', $service['title'])[1] ?? '' }}
                                                <i data-lucide="arrow-right" class="ml-2 h-4 w-4 sm:h-5 sm:w-5"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="{{ !$isEven ? 'lg:col-start-1' : '' }} mt-8 lg:mt-0">
                                        <div class="relative">
                                            <div
                                                class="bg-white rounded-3xl p-8 sm:p-10 shadow-xl border border-gray-200 relative overflow-hidden">
                                                <div class="absolute inset-0 opacity-5">
                                                    <div
                                                        class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-amber-400 to-amber-500 rounded-full -translate-y-20 translate-x-20">
                                                    </div>
                                                    <div
                                                        class="absolute bottom-0 left-0 w-32 h-32 bg-gradient-to-tr from-amber-300 to-amber-400 rounded-full translate-y-16 -translate-x-16">
                                                    </div>
                                                </div>
                                                <div class="relative">
                                                    <div class="mb-6">
                                                        <div
                                                            class="inline-flex h-20 w-20 sm:h-24 sm:w-24 items-center justify-center rounded-2xl bg-white shadow-lg p-3">
                                                            <img src="{{ asset($service['icon']) }}"
                                                                alt="{{ $service['title'] }}"
                                                                class="h-full w-full object-contain">
                                                        </div>
                                                    </div>
                                                    <div class="space-y-4">
                                                        <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">Key
                                                            Benefits</h3>
                                                        <div class="grid grid-cols-1 gap-3">
                                                            @foreach(['Strategic insight and planning', 'Cost-effective expertise', 'Scalable solutions', 'Global compliance'] as $benefit)
                                                                <div class="flex items-center space-x-3">
                                                                    <div
                                                                        class="flex h-8 w-8 items-center justify-center rounded-lg bg-amber-100">
                                                                        <div class="w-2 h-2 bg-amber-500 rounded-full"></div>
                                                                    </div>
                                                                    <span
                                                                        class="text-sm sm:text-base font-medium text-gray-700">{{ $benefit }}</span>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="mt-6 pt-6 border-t border-gray-200">
                                                        <div class="grid grid-cols-2 gap-4">
                                                            <div class="text-center">
                                                                <div class="text-2xl font-bold text-amber-600">24/7</div>
                                                                <div class="text-xs text-gray-600">Support</div>
                                                            </div>
                                                            <div class="text-center">
                                                                <div class="text-2xl font-bold text-amber-600">Global</div>
                                                                <div class="text-xs text-gray-600">Reach</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="absolute -top-4 -right-4 bg-amber-500 text-white p-3 rounded-xl shadow-lg">
                                                <div class="text-xs font-semibold">#{{ $index + 1 }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="px-4 py-12 sm:py-16 sm:px-6 lg:px-8 bg-white">
            <div class="mx-auto max-w-3xl text-center">
                <div class="rounded-2xl bg-gradient-to-r from-amber-50 to-orange-50 p-6 sm:p-8 border border-amber-100">
                    <h2 class="mb-3 sm:mb-4 text-xl sm:text-2xl font-bold text-gray-900 font-serif">Ready to Transform Your
                        Financial Operations?</h2>
                    <p class="mb-5 sm:mb-6 text-base sm:text-lg text-gray-700 leading-relaxed">Let's discuss how our virtual
                        CFO services can accelerate your business growth and optimize your financial performance.</p>
                    <a href="{{ url('/contact') }}"
                        class="inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 bg-amber-500 text-white font-semibold rounded-lg hover:bg-gray-900 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 min-h-[44px] text-sm sm:text-base">
                        Schedule a Consultation <i data-lucide="arrow-right" class="ml-2 h-4 w-4 sm:h-5 sm:w-5"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection