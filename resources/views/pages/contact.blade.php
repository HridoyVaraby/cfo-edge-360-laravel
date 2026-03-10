@extends('layouts.app')

@section('title', "Let's Build Your Financial Edge - CFO Edge 360")
@section('meta_description', 'Contact CFO EDGE360 for strategic financial leadership. Book a free consultation, email us, call us, or chat via WhatsApp. Available globally.')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-white">
        <x-page-hero title="Let's Build Your Financial Edge"
            description="Reach out to explore how CFO EDGE360 can support your growth with strategic financial leadership and comprehensive virtual CFO services." />

        <section class="px-4 py-12 sm:py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-6xl">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">
                    <!-- Contact Information -->
                    <div class="space-y-6 sm:space-y-8">
                        <div class="relative">
                            <div
                                class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-6 sm:p-8 border border-amber-100">
                                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 font-serif mb-4">Let's Connect &
                                    Transform Your Business</h2>
                                <p class="text-base sm:text-lg text-gray-700 leading-relaxed">Ready to elevate your
                                    financial operations? Our expert CFO services are designed to drive growth, optimize
                                    processes, and deliver strategic insights that matter.</p>
                                <div class="mt-4 flex items-center space-x-4 text-sm text-amber-700">
                                    <div class="flex items-center space-x-1"><i data-lucide="clock"
                                            class="h-4 w-4"></i><span>24/7 Support</span></div>
                                    <div class="flex items-center space-x-1"><i data-lucide="globe"
                                            class="h-4 w-4"></i><span>Global Coverage</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Preferred Contact Methods</h3>

                            <!-- Book Consultation -->
                            <div
                                class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl p-4 border border-purple-200">
                                <div class="flex items-start space-x-4">
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-r from-purple-500 to-purple-600 text-white flex-shrink-0 shadow-lg">
                                        <i data-lucide="calendar" class="h-6 w-6"></i></div>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-semibold text-gray-900 mb-1">Book a Free Consultation</h4>
                                        <p class="text-sm text-gray-600 mb-3">Get personalized financial insights in a
                                            30-minute session</p>
                                        <a href="https://calendly.com/cfoedge360/30min" target="_blank"
                                            rel="noopener noreferrer"
                                            class="inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-amber-500 to-amber-600 text-white font-semibold rounded-lg hover:from-amber-600 hover:to-amber-700 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                            <i data-lucide="calendar" class="h-4 w-4 mr-2"></i> Schedule Now - It's Free
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div
                                class="bg-white rounded-xl p-4 border border-gray-200 hover:border-amber-300 hover:shadow-md transition-all duration-200">
                                <div class="flex items-start space-x-4">
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-r from-amber-400 to-amber-500 text-white flex-shrink-0">
                                        <i data-lucide="mail" class="h-6 w-6"></i></div>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-semibold text-gray-900">Email Us</h4>
                                        <a href="mailto:reaz@cfoedge360.com"
                                            class="text-amber-600 hover:text-amber-700 font-medium transition-colors">reaz@cfoedge360.com</a>
                                        <div class="flex items-center mt-2 space-x-4 text-sm text-gray-500">
                                            <div class="flex items-center space-x-1">
                                                <div class="w-2 h-2 bg-green-400 rounded-full"></div><span>Response within
                                                    24 hours</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div
                                class="bg-white rounded-xl p-4 border border-gray-200 hover:border-blue-300 hover:shadow-md transition-all duration-200">
                                <div class="flex items-start space-x-4">
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-r from-blue-400 to-blue-500 text-white flex-shrink-0">
                                        <i data-lucide="phone" class="h-6 w-6"></i></div>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-semibold text-gray-900">Call Us Directly</h4>
                                        <div class="space-y-1">
                                            <div><span class="text-sm text-gray-500">US:</span><a href="tel:+15055232471"
                                                    class="ml-2 text-blue-600 hover:text-blue-700 font-medium">+1 505 523
                                                    2471</a></div>
                                            <div><span class="text-sm text-gray-500">BD:</span><a href="tel:+8801713301465"
                                                    class="ml-2 text-blue-600 hover:text-blue-700 font-medium">+880
                                                    1713-301465</a></div>
                                        </div>
                                        <div class="flex items-center mt-2 space-x-4 text-sm text-gray-500">
                                            <div class="flex items-center space-x-1"><i data-lucide="clock"
                                                    class="w-3 h-3"></i><span>Available across all time zones</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- WhatsApp -->
                            <div
                                class="bg-white rounded-xl p-4 border border-gray-200 hover:border-green-300 hover:shadow-md transition-all duration-200">
                                <div class="flex items-start space-x-4">
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-r from-green-500 to-green-600 text-white flex-shrink-0">
                                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.361.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-semibold text-gray-900">WhatsApp Chat</h4>
                                        <p class="text-gray-600 mb-2">+88 01973 301465</p>
                                        <a href="https://wa.me/8801973301465" target="_blank" rel="noopener noreferrer"
                                            class="inline-flex items-center px-4 py-2 bg-green-500 text-white font-medium rounded-lg hover:bg-green-600 transition-colors duration-200">
                                            <svg class="h-4 w-4 mr-2" viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.361.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                            </svg> Start WhatsApp Chat
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Office Info -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Office Information</h3>
                            <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-4 border border-gray-200">
                                <div class="flex items-start space-x-4">
                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-r from-gray-600 to-gray-700 text-white flex-shrink-0">
                                        <i data-lucide="map-pin" class="h-6 w-6"></i></div>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Headquarters</h4>
                                        <address class="text-gray-600 not-italic leading-relaxed">
                                            <div class="font-medium">ASTRAL PARADISE</div>
                                            <div>Flat# 5/A, House-20, Road-25</div>
                                            <div>Eastern Housing Pallabi</div>
                                            <div>(Sujatnagar Balur Math)</div>
                                            <div>Mirpur-12, Dhaka-1216</div>
                                            <div class="font-medium mt-1">Bangladesh</div>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6 mt-8 lg:mt-0">
                        <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg border border-gray-100">
                            <div class="text-left mb-6">
                                <h3 class="text-2xl font-bold text-amber-500 mb-2 font-serif">Send us a message</h3>
                                <p class="text-gray-600">Have a question or need assistance? Fill out the form below, and
                                    we'll get back to you as soon as possible. Your inquiries are important to us!</p>
                            </div>
                            <div class="w-full overflow-hidden">
                                <iframe src="https://cms.cfoedge360.com/form/" class="w-full border-0 rounded-lg"
                                    style="min-height: 600px; overflow: hidden" title="Contact Form" loading="lazy"
                                    scrolling="no"></iframe>
                            </div>
                        </div>

                        <!-- Business Hours -->
                        <div class="mt-6 bg-blue-50 rounded-xl p-6 border border-blue-200">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 text-white flex-shrink-0">
                                    <i data-lucide="clock" class="h-6 w-6"></i></div>
                                <div class="flex-1">
                                    <h4 class="text-lg font-semibold text-gray-900 mb-2">Business Hours</h4>
                                    <div class="space-y-1 text-sm text-gray-600">
                                        <div class="flex justify-between"><span>Monday - Friday:</span><span
                                                class="font-medium">9:00 AM - 6:00 PM (GMT+6)</span></div>
                                        <div class="flex justify-between"><span>Saturday:</span><span
                                                class="font-medium">10:00 AM - 4:00 PM (GMT+6)</span></div>
                                        <div class="flex justify-between"><span>Sunday:</span><span
                                                class="text-amber-600 font-medium">Emergency Only</span></div>
                                        <div class="mt-2 pt-2 border-t border-blue-200">
                                            <div class="flex items-center space-x-1 text-blue-700"><i data-lucide="globe"
                                                    class="h-3 w-3"></i><span class="text-xs font-medium">Available for
                                                    global clients across all time zones</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social -->
                        <div
                            class="mt-6 bg-gradient-to-r from-amber-50 to-orange-50 rounded-xl p-6 border border-amber-200">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Connect & Follow</h3>
                            <p class="text-gray-600 text-sm mb-4">Stay updated with our latest insights, financial tips, and
                                business growth strategies.</p>
                            <div class="flex space-x-4">
                                <a href="https://linkedin.com/company/cfoedge360" target="_blank" rel="noopener noreferrer"
                                    class="flex items-center space-x-2 px-4 py-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5"><i
                                        data-lucide="linkedin" class="h-4 w-4"></i><span
                                        class="text-sm font-medium">LinkedIn</span></a>
                                <a href="https://www.facebook.com/cfoedge360/" target="_blank" rel="noopener noreferrer"
                                    class="flex items-center space-x-2 px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5"><i
                                        data-lucide="facebook" class="h-4 w-4"></i><span
                                        class="text-sm font-medium">Facebook</span></a>
                                <a href="https://wa.me/8801973301465" target="_blank" rel="noopener noreferrer"
                                    class="flex items-center space-x-2 px-4 py-2 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-lg hover:from-green-600 hover:to-green-700 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.361.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                    </svg>
                                    <span class="text-sm font-medium">WhatsApp</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection