@extends('layouts.app')

@section('title', 'CFO Edge 360 - Your 360° Virtual CFO Advantage')
@section('meta_description', 'Expert virtual and fractional CFO services. Strategic financial planning, cash flow optimization, investor reporting, and global compliance — all at a fraction of the cost.')

@section('content')
    <div class="min-h-screen">

        <!-- FAQ Schema for SEO -->
        @push('head')
            @verbatim
                <script type="application/ld+json">
                        {
                            "@context": "https://schema.org",
                            "@type": "FAQPage",
                            "mainEntity": [
                                {"@type":"Question","name":"What is a Virtual CFO and how does it differ from a traditional CFO?","acceptedAnswer":{"@type":"Answer","text":"A Virtual CFO provides the same strategic financial expertise as a traditional CFO but on a flexible, part-time basis. This allows growing businesses to access C-level financial guidance without the full-time executive cost, making it perfect for companies that need expert financial leadership but aren't ready for a full-time hire."}},
                                {"@type":"Question","name":"What size businesses do you typically work with?","acceptedAnswer":{"@type":"Answer","text":"We work with businesses ranging from startups to mid-market companies, typically with revenues between $1M to $50M. Our services are particularly valuable for companies in growth phases, those preparing for fundraising, or businesses expanding internationally that need strategic financial guidance."}},
                                {"@type":"Question","name":"How quickly can you start working with our business?","acceptedAnswer":{"@type":"Answer","text":"We can typically begin our engagement within 1-2 weeks of our initial consultation. This includes understanding your business needs, setting up necessary access to financial systems, and developing a customized service plan that aligns with your specific goals and timeline."}},
                                {"@type":"Question","name":"Do you work with businesses in specific industries?","acceptedAnswer":{"@type":"Answer","text":"We have experience across various industries including technology, healthcare, manufacturing, professional services, and e-commerce. Our expertise in financial strategy, compliance, and growth planning translates well across different sectors, allowing us to provide valuable insights regardless of your industry."}},
                                {"@type":"Question","name":"What financial systems and software do you work with?","acceptedAnswer":{"@type":"Answer","text":"We're proficient with all major accounting and financial systems including QuickBooks, Xero, NetSuite, Sage, and various ERP systems. We also work with financial planning tools, business intelligence platforms, and can help you select and implement the right systems for your business needs."}},
                                {"@type":"Question","name":"How do you ensure data security and confidentiality?","acceptedAnswer":{"@type":"Answer","text":"We maintain the highest standards of data security and confidentiality. All client information is protected through encrypted communications, secure cloud platforms, and strict confidentiality agreements. We're also experienced with compliance requirements across different industries and jurisdictions."}}
                            ]
                        }
                        </script>
            @endverbatim
        @endpush

        <!-- Hero Section -->
        <section class="relative min-h-screen bg-gradient-to-br from-gray-900 via-slate-800 to-gray-900 overflow-hidden">
            <div class="absolute inset-0">
                <div
                    class="absolute top-20 right-10 w-64 h-64 bg-gradient-to-br from-amber-500/20 to-amber-400/10 rounded-full blur-3xl">
                </div>
                <div
                    class="absolute bottom-20 left-10 w-96 h-96 bg-gradient-to-tr from-blue-500/10 to-slate-600/20 rounded-full blur-3xl">
                </div>
            </div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-16 sm:pt-20 pb-12 sm:pb-16">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 lg:items-start min-h-[70vh] sm:min-h-[80vh]">
                    <div class="space-y-6 sm:space-y-8 animate-fade-in">
                        <div class="space-y-4 sm:space-y-6">
                            <h1
                                class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight">
                                <span class="block font-serif">Your 360°</span>
                                <span class="block font-serif text-gray-100">Virtual CFO</span>
                                <span
                                    class="block font-serif bg-gradient-to-r from-amber-400 to-amber-300 bg-clip-text text-transparent">Advantage</span>
                            </h1>
                            <p class="text-lg sm:text-xl lg:text-2xl text-gray-300 leading-relaxed max-w-2xl font-light">
                                Smarter Financial Leadership, On-Demand.
                                <span class="block mt-2 text-base sm:text-lg text-gray-400">Global reach, fractional cost,
                                    strategic insight.</span>
                            </p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 pt-2 sm:pt-4">
                            <a href="{{ route('contact') }}"
                                class="group inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 bg-amber-500 text-white font-semibold rounded-xl hover:bg-gray-900 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 min-h-[44px] text-sm sm:text-base">
                                Book a Free Consultation
                                <i data-lucide="arrow-right"
                                    class="ml-2 h-4 w-4 sm:h-5 sm:w-5 group-hover:translate-x-1 transition-transform duration-200"></i>
                            </a>
                            <a href="{{ route('services') }}"
                                class="group inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 bg-transparent text-white font-semibold rounded-xl border-2 border-gray-600 hover:border-amber-400 hover:bg-gray-800 transition-all duration-300 shadow-sm hover:shadow-md min-h-[44px] text-sm sm:text-base">
                                Explore Our Services
                                <i data-lucide="arrow-right"
                                    class="ml-2 h-4 w-4 sm:h-5 sm:w-5 group-hover:translate-x-1 transition-transform duration-200"></i>
                            </a>
                        </div>
                        <div class="pt-6 sm:pt-8 border-t border-gray-700">
                            <p
                                class="text-xs sm:text-sm text-gray-400 mb-3 sm:mb-4 font-medium tracking-wide uppercase text-center sm:text-left">
                                Trusted by Growing Companies Worldwide</p>
                            <div
                                class="flex flex-col sm:flex-row items-center space-y-3 sm:space-y-0 sm:space-x-6 lg:space-x-8 text-gray-300">
                                <div class="flex items-center space-x-2"><i data-lucide="globe"
                                        class="h-4 w-4 sm:h-5 sm:w-5"></i><span
                                        class="text-xs sm:text-sm font-medium">Global Reach</span></div>
                                <div class="flex items-center space-x-2"><i data-lucide="users"
                                        class="h-4 w-4 sm:h-5 sm:w-5"></i><span
                                        class="text-xs sm:text-sm font-medium">Expert Team</span></div>
                                <div class="flex items-center space-x-2"><i data-lucide="trending-up"
                                        class="h-4 w-4 sm:h-5 sm:w-5"></i><span
                                        class="text-xs sm:text-sm font-medium">Proven Results</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="relative lg:pl-8 animate-slide-up lg:pt-8 order-first lg:order-last">
                        <div class="relative">
                            <div
                                class="relative overflow-hidden rounded-2xl shadow-2xl transform rotate-0 hover:-rotate-1 transition-transform duration-500">
                                <img src="{{ asset('banner.webp') }}" alt="CFO EDGE360 Financial Services"
                                    class="w-full h-auto object-cover rounded-2xl">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-gray-900/20 via-transparent to-transparent rounded-2xl">
                                </div>
                            </div>
                            <div
                                class="absolute -top-2 sm:-top-4 -left-2 sm:-left-4 bg-gray-800/90 backdrop-blur-sm border border-gray-600 rounded-xl shadow-lg p-2 sm:p-3 animate-float">
                                <div class="flex items-center space-x-1 sm:space-x-2">
                                    <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                                    <span class="text-xs font-medium text-gray-200">Live Analytics</span>
                                </div>
                            </div>
                            <div
                                class="absolute -bottom-2 sm:-bottom-4 -right-2 sm:-right-4 bg-gray-800/90 backdrop-blur-sm border border-gray-600 rounded-xl shadow-lg p-2 sm:p-3 animate-float-delayed">
                                <div class="flex items-center space-x-1 sm:space-x-2">
                                    <i data-lucide="users" class="h-3 w-3 sm:h-4 sm:w-4 text-blue-400"></i>
                                    <span class="text-xs font-medium text-gray-200">Global Team</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Company Overview -->
        <section class="px-4 py-12 sm:py-16 lg:py-20 sm:px-6 lg:px-8" style="background-color: #fffaeb">
            <div class="mx-auto max-w-6xl">
                <div class="text-center mb-10 sm:mb-12 lg:mb-16">
                    <h2 class="mb-4 sm:mb-6 text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 font-serif">Global
                        Virtual CFO Excellence</h2>
                    <div
                        class="mx-auto w-20 sm:w-24 h-1 bg-gradient-to-r from-amber-400 to-amber-500 rounded-full mb-6 sm:mb-8">
                    </div>
                </div>
                <div class="grid lg:grid-cols-2 gap-8 sm:gap-10 lg:gap-12 items-center">
                    <div class="space-y-4 sm:space-y-6">
                        <p class="text-base sm:text-lg lg:text-xl text-gray-700 leading-relaxed">CFO EDGE360 provides
                            virtual and fractional CFO services to businesses all over the world, delivering strategic
                            financial leadership that scales with your growth.</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                            <div class="bg-white rounded-xl p-4 sm:p-6 shadow-sm border border-gray-100">
                                <div class="text-xl sm:text-2xl font-bold text-amber-600 mb-1 sm:mb-2">360°</div>
                                <div class="text-xs sm:text-sm font-medium text-gray-900 mb-1">Complete Coverage</div>
                                <div class="text-xs text-gray-600">Full-spectrum CFO services</div>
                            </div>
                            <div class="bg-white rounded-xl p-4 sm:p-6 shadow-sm border border-gray-100">
                                <div class="text-xl sm:text-2xl font-bold text-amber-600 mb-1 sm:mb-2">Global</div>
                                <div class="text-xs sm:text-sm font-medium text-gray-900 mb-1">Worldwide Reach</div>
                                <div class="text-xs text-gray-600">Serving clients globally</div>
                            </div>
                        </div>
                        <p class="text-sm sm:text-base lg:text-lg text-gray-600 leading-relaxed">We deliver strategic
                            forecasting, cash flow optimization, investor reporting, KPI dashboards, global compliance, and
                            fundraising support — all at a fraction of the cost of a full-time CFO.</p>
                    </div>
                    <div class="relative mt-8 lg:mt-0">
                        <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100">
                            <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-4 sm:mb-6 text-center">Serving
                                Businesses Worldwide</h3>
                            <div class="space-y-3 sm:space-y-4">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                                    <div
                                        class="flex items-center space-x-2 sm:space-x-3 p-2 sm:p-3 rounded-lg bg-gradient-to-r from-blue-50 to-blue-100 border border-blue-200">
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-blue-500 rounded-full flex-shrink-0"></div>
                                        <span class="text-sm sm:text-base font-medium text-gray-900">USA</span>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 sm:space-x-3 p-2 sm:p-3 rounded-lg bg-gradient-to-r from-green-50 to-green-100 border border-green-200">
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-green-500 rounded-full flex-shrink-0"></div>
                                        <span class="text-sm sm:text-base font-medium text-gray-900">Europe</span>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 sm:space-x-3 p-2 sm:p-3 rounded-lg bg-gradient-to-r from-red-50 to-red-100 border border-red-200">
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-red-500 rounded-full flex-shrink-0"></div><span
                                            class="text-sm sm:text-base font-medium text-gray-900">Canada</span>
                                    </div>
                                    <div
                                        class="flex items-center space-x-2 sm:space-x-3 p-2 sm:p-3 rounded-lg bg-gradient-to-r from-purple-50 to-purple-100 border border-purple-200">
                                        <div class="w-2 h-2 sm:w-3 sm:h-3 bg-purple-500 rounded-full flex-shrink-0"></div>
                                        <span class="text-sm sm:text-base font-medium text-gray-900">Australia</span>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-center space-x-2 sm:space-x-3 p-3 sm:p-4 rounded-lg bg-gradient-to-r from-indigo-50 to-indigo-100 border border-indigo-200">
                                    <div class="w-2 h-2 sm:w-3 sm:h-3 bg-indigo-500 rounded-full flex-shrink-0"></div><span
                                        class="text-sm sm:text-base font-medium text-gray-900">All Over The World</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute -top-2 sm:-top-4 -right-2 sm:-right-4 w-6 h-6 sm:w-8 sm:h-8 bg-gradient-to-r from-amber-400 to-amber-500 rounded-full opacity-20">
                        </div>
                        <div
                            class="absolute -bottom-2 sm:-bottom-4 -left-2 sm:-left-4 w-4 h-4 sm:w-6 sm:h-6 bg-gradient-to-r from-amber-400 to-amber-500 rounded-full opacity-30">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Snapshot -->
        @php
            $services = [
                ['icon' => '/icons/analysis.png', 'title' => 'Financial Strategy & Forecasting', 'description' => 'Strategic financial planning and predictive modeling to drive business growth and informed decision-making.', 'link' => '/services#strategy'],
                ['icon' => '/icons/circular-economy.png', 'title' => 'Cash Flow Optimization', 'description' => 'Working capital management and cash flow optimization to ensure sustainable business operations.', 'link' => '/services#cashflow'],
                ['icon' => '/icons/report.png', 'title' => 'Investor & Board Reporting', 'description' => 'Professional financial reporting and presentations for investors, board members, and stakeholders.', 'link' => '/services#reporting'],
                ['icon' => '/icons/global-connection.png', 'title' => 'Global Expansion & Compliance', 'description' => 'Navigate international markets with expert guidance on global financial compliance and regulations.', 'link' => '/services#global'],
                ['icon' => '/icons/analytics.png', 'title' => 'KPI Dashboard & Analytics', 'description' => 'Real-time financial dashboards and key performance indicators to monitor business health.', 'link' => '/services#analytics'],
                ['icon' => '/icons/customer-service.png', 'title' => 'M&A and Fundraising Support', 'description' => 'Expert support for mergers, acquisitions, and fundraising activities to accelerate growth.', 'link' => '/services#ma'],
                ['icon' => '/icons/settings.png', 'title' => 'Financial Operations Setup', 'description' => 'Establish robust financial systems and processes to scale your business efficiently.', 'link' => '/services#operations'],
            ];
        @endphp
        <section class="px-4 py-12 sm:py-16 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-900 via-slate-800 to-gray-900">
            <div class="mx-auto max-w-7xl">
                <div class="text-center mb-10 sm:mb-12 lg:mb-16">
                    <h2 class="text-2xl sm:text-3xl font-bold text-white font-serif mb-3 sm:mb-4">Comprehensive CFO Services
                    </h2>
                    <p class="text-base sm:text-lg text-gray-300 max-w-2xl mx-auto px-4 sm:px-0">From strategic planning to
                        operational excellence, we provide the full spectrum of CFO services tailored to your business
                        needs.</p>
                </div>
                <div class="grid gap-6 sm:gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    @foreach($services as $service)
                        <a href="{{ $service['link'] }}"
                            class="group relative bg-gray-800 rounded-2xl p-4 sm:p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-700 hover:border-amber-400 transform hover:-translate-y-1">
                            <div
                                class="mb-3 sm:mb-4 flex h-12 w-12 sm:h-14 sm:w-14 items-center justify-center rounded-xl bg-white group-hover:scale-110 transition-transform duration-300 p-2">
                                <img src="{{ asset($service['icon']) }}" alt="{{ $service['title'] }}"
                                    class="h-full w-full object-contain">
                            </div>
                            <h3 class="mb-2 sm:mb-3 text-base sm:text-lg font-semibold text-white leading-tight">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-xs sm:text-sm text-gray-300 leading-relaxed mb-3 sm:mb-4">
                                {{ $service['description'] }}
                            </p>
                            <div
                                class="flex items-center text-amber-400 text-xs sm:text-sm font-medium group-hover:text-amber-300">
                                Learn more <i data-lucide="arrow-right"
                                    class="ml-1 h-3 w-3 sm:h-4 sm:w-4 group-hover:translate-x-1 transition-transform duration-200"></i>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Founder Section -->
        <section class="px-4 py-12 sm:py-16 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-white">
            <div class="mx-auto max-w-7xl">
                <div class="grid lg:grid-cols-5 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-3 space-y-6">
                        <div class="mb-2"><img src="{{ asset('logo.png') }}" alt="CFO EDGE360 - Virtual CFO Services"
                                class="h-32 w-32 object-contain"></div>
                        <div>
                            <p class="text-base text-gray-600 leading-relaxed mb-4">I am a seasoned financial professional
                                with extensive experience in strategic planning, financial analysis, and business growth
                                optimization. With a passion for precision and a deep understanding of modern financial
                                systems, I founded CFO EDGE360 to provide reliable, client-focused services tailored to meet
                                the unique needs of each business.</p>
                            <p class="text-base text-gray-600 leading-relaxed">My mission is to help businesses achieve
                                sustainable growth through strategic financial guidance, operational excellence, and
                                data-driven decision making. Every client partnership is built on trust, transparency, and
                                measurable results.</p>
                        </div>
                        <div class="pt-6 border-t border-gray-200">
                            <h4 class="text-2xl font-bold text-gray-900 mb-1">Md. Reazul Haque (Reaz)</h4>
                            <p class="text-amber-600 font-semibold mb-2">Founder & CEO</p>
                            <p class="text-sm text-gray-600">Chartered Accountants, MBA in Finance<br>X CFO with 15+ years
                                of experience</p>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div class="relative max-w-lg mx-auto lg:max-w-none">
                            <div class="relative overflow-hidden rounded-2xl shadow-xl">
                                <img src="{{ asset('Reaz.webp') }}"
                                    alt="Md. Reazul Haque (Reaz) - Founder & CEO of CFO EDGE360"
                                    class="w-full h-auto object-cover object-center"
                                    style="aspect-ratio: 4/5; max-height: 500px">
                                <div
                                    class="absolute top-4 right-4 bg-white/95 backdrop-blur-sm rounded-lg px-3 py-2 shadow-lg">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                        <span class="text-xs font-semibold text-gray-800">Available for Consultation</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        @php
            $faqs = [
                ['question' => 'What is a Virtual CFO and how does it differ from a traditional CFO?', 'answer' => "A Virtual CFO provides the same strategic financial expertise as a traditional CFO but on a flexible, part-time basis. This allows growing businesses to access C-level financial guidance without the full-time executive cost, making it perfect for companies that need expert financial leadership but aren't ready for a full-time hire."],
                ['question' => 'What size businesses do you typically work with?', 'answer' => 'We work with businesses ranging from startups to mid-market companies, typically with revenues between $1M to $50M. Our services are particularly valuable for companies in growth phases, those preparing for fundraising, or businesses expanding internationally that need strategic financial guidance.'],
                ['question' => 'How quickly can you start working with our business?', 'answer' => 'We can typically begin our engagement within 1-2 weeks of our initial consultation. This includes understanding your business needs, setting up necessary access to financial systems, and developing a customized service plan that aligns with your specific goals and timeline.'],
                ['question' => 'Do you work with businesses in specific industries?', 'answer' => 'We have experience across various industries including technology, healthcare, manufacturing, professional services, and e-commerce. Our expertise in financial strategy, compliance, and growth planning translates well across different sectors, allowing us to provide valuable insights regardless of your industry.'],
                ['question' => 'What financial systems and software do you work with?', 'answer' => "We're proficient with all major accounting and financial systems including QuickBooks, Xero, NetSuite, Sage, and various ERP systems. We also work with financial planning tools, business intelligence platforms, and can help you select and implement the right systems for your business needs."],
                ['question' => 'How do you ensure data security and confidentiality?', 'answer' => "We maintain the highest standards of data security and confidentiality. All client information is protected through encrypted communications, secure cloud platforms, and strict confidentiality agreements. We're also experienced with compliance requirements across different industries and jurisdictions."],
            ];
        @endphp
        <section class="px-4 py-12 sm:py-16 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-900 via-slate-800 to-gray-900"
            x-data="{ openFaq: 0 }">
            <div class="mx-auto max-w-4xl">
                <div class="text-center mb-10 sm:mb-12 lg:mb-16">
                    <h2 class="text-2xl sm:text-3xl font-bold text-white font-serif mb-3 sm:mb-4">Frequently Asked Questions
                    </h2>
                    <p class="text-base sm:text-lg text-gray-300 max-w-2xl mx-auto">Get answers to common questions about
                        our virtual CFO services and how we can help your business grow.</p>
                </div>
                <div class="space-y-4">
                    @foreach($faqs as $index => $faq)
                        <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden">
                            <button @click="openFaq = (openFaq === {{ $index }}) ? -1 : {{ $index }}"
                                class="w-full px-6 py-6 sm:px-8 sm:py-6 text-left flex items-center justify-between hover:bg-gray-750 transition-colors duration-200 min-h-[44px]">
                                <h3 class="text-lg sm:text-xl font-semibold text-white leading-tight pr-4">
                                    {{ $faq['question'] }}
                                </h3>
                                <i data-lucide="chevron-down"
                                    class="h-5 w-5 text-amber-400 transition-transform duration-200 flex-shrink-0"
                                    :class="openFaq === {{ $index }} ? 'rotate-180' : ''"></i>
                            </button>
                            <div x-show="openFaq === {{ $index }}" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0 max-h-0">
                                <div class="px-6 pb-6 sm:px-8 sm:pb-8">
                                    <p class="text-gray-300 leading-relaxed text-sm sm:text-base">{{ $faq['answer'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-10 sm:mt-12">
                    <p class="text-gray-300 mb-6">Have more questions? We'd love to discuss your specific needs.</p>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 bg-amber-500 text-white font-semibold rounded-xl hover:bg-amber-600 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 min-h-[44px] text-sm sm:text-base">
                        Get Your Questions Answered
                        <i data-lucide="arrow-right" class="ml-2 h-4 w-4 sm:h-5 sm:w-5"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <x-cta-section />
    </div>
@endsection