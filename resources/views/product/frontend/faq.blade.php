@extends('layouts.frontend.master')
@section('title', 'FAQs')
@section('content')
<main>
    <section class="faq-accordination">
        <div class="container">
            <h3 class="faq-page-title">FAQs</h3>
            <p class="sub-title">A curated collection of the most received user questions</p>
            <div class="accordion-container">
                <div class="accordion-item">
                    <div class="item-header">
                        <h4 class="item-question">
                            How do I link my domain name with my YouCan store?
                        </h4>
                        <div class="item-icon">

                            <img src="{{ asset('frontend/images/faq-arrow.svg')}}"
                                alt="arrow down" class="arrow-down">
                        </div>
                    </div>
                    <div class="item-content">
                        <p class="item-answer">
                            You can easily add your domain to Your YouCan store by using one of two available options:
                            the NS solution or the CNAME solution. For more details check
                            <a href="https://youcan.shop/en/help/store/domains/link-domain" target="_blank">
                                <span class="faq-link">this article</span>.
                            </a>
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="item-header">
                        <h4 class="item-question">
                            Why should I buy credit to activate my store?
                        </h4>
                        <div class="item-icon">
                            <img src="{{ asset('frontend/images/faq-arrow.svg')}}"
                                alt="arrow down" class="arrow-down">
                        </div>
                    </div>
                    <div class="item-content">
                        <p class="item-answer">
                            To avoid fake accounts and robots. The amount bought will be a deposit in your balance that
                            you can always
                            use later.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="item-header">
                        <h4 class="item-question">
                            Is there a limit on the number of products I can add to my store?
                        </h4>
                        <div class="item-icon">
                            <img src="{{ asset('frontend/images/faq-arrow.svg')}}"
                                alt="arrow down" class="arrow-down">
                        </div>
                    </div>
                    <div class="item-content">
                        <p class="item-answer">
                            You can add an unlimited number of products and receive an unlimited number of qualified
                            visitors
                            excluding fake visitors. YouCan enables you to create, develop and manage your store without
                            limitations.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="item-header">
                        <h4 class="item-question">
                            Does YouCan take care of storage and shipping of my products?
                        </h4>
                        <div class="item-icon">
                            <img src="{{ asset('frontend/images/faq-arrow.svg')}}"
                                alt="arrow down" class="arrow-down">
                        </div>
                    </div>
                    <div class="item-content">
                        <p class="item-answer">
                            We do not currently support storage and shipping, but we have an aggregator service (YouCan
                            Ship) that
                            provides you with a list of local shipping companies and you can choose from it.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="item-header">
                        <h4 class="item-question">
                            Can I use YouCan for dropshipping
                        </h4>
                        <div class="item-icon">
                            <img src="{{ asset('frontend/images/faq-arrow.svg')}}"
                                alt="arrow down" class="arrow-down">
                        </div>
                    </div>
                    <div class="item-content">
                        <p class="item-answer">
                            Yes, YouCan can be used for dropshipping. All the tools you need to do so are available to
                            you.
                            Please read our terms and conditions for cases where you are not allowed to use
                            dropshipping.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="item-header">
                        <h4 class="item-question">
                            Can I use different domain names for my store?
                        </h4>
                        <div class="item-icon">
                            <img src="{{ asset('frontend/images/faq-arrow.svg')}}"
                                alt="arrow down" class="arrow-down">
                        </div>
                    </div>
                    <div class="item-content">
                        <p class="item-answer">
                            You can use more than one custom domain for the same store with no issue.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="item-header">
                        <h4 class="item-question">
                            Can anyone see my store data?
                        </h4>
                        <div class="item-icon">
                            <img src="{{ asset('frontend/images/faq-arrow.svg')}}"
                                alt="arrow down" class="arrow-down">
                        </div>
                    </div>
                    <div class="item-content">
                        <p class="item-answer">
                            YouCan is very keen to protect its customers' data, which is why the platform was built
                            according to the
                            highest technical standards related to the protection of identity, rights, freedoms,
                            privacy, and
                            everything that might affect them through the use of information, in full respect for the
                            provisions of
                            Law N° 09.08 related to the protection of private persons towards processing data of a
                            personal nature.
                            <br>
                            The platform underwent several monitoring procedures before its launch, and currently, there
                            is no
                            vulnerability regarding the safety of our customers, and we also have an internal charter
                            regarding the
                            processing of personal data. In addition, the support staff is restricted to accessing only
                            the
                            information necessary to accomplish their tasks.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="item-header">
                        <h4 class="item-question">
                            Should I learn programming and design to create a professional store?
                        </h4>
                        <div class="item-icon">
                            <img src="{{ asset('frontend/images/faq-arrow.svg')}}"
                                alt="arrow down" class="arrow-down">
                        </div>
                    </div>
                    <div class="item-content">
                        <p class="item-answer">
                            You don't need technical or design expertise to launch your online business with YouCan. We
                            offer you all
                            the tools and features you need to succeed with your online store
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="item-header">
                        <h4 class="item-question">
                            When should I pay my invoice?
                        </h4>
                        <div class="item-icon">
                            <img src="{{ asset('frontend/images/faq-arrow.svg')}}"
                                alt="arrow down" class="arrow-down">
                        </div>
                    </div>
                    <div class="item-content">
                        <p class="item-answer">
                            You have to pay your invoice once you reach $10k in sales if you choose to pay based on the
                            transaction
                            fee, while if you choose a monthly subscription plan, you will pay at the end of every
                            month, 30 days
                            after you activate your plan. You can find more details on the
                            <a href="https://youcan.shop/en/v2/pricing" class="faq-link">pricing</a> page.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="item-header">
                        <h4 class="item-question">
                            Can clients pay me using their credit cards?
                        </h4>
                        <div class="item-icon">
                            <img src="{{ asset('frontend/images/faq-arrow.svg')}}"
                                alt="arrow down" class="arrow-down">
                        </div>
                    </div>
                    <div class="item-content">
                        <p class="item-answer">
                            Yes your customer can pay you with credit cards either using Stripe or
                            <a href="https://youcanpay.com/" class="faq-link" target="_blank">YouCan Pay</a> (Moroccan
                            solution
                            Payment developped by YouCan)
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="item-header">
                        <h4 class="item-question">
                            What is a store slug?
                        </h4>
                        <div class="item-icon">
                            <img src="{{ asset('frontend/images/faq-arrow.svg')}}"
                                alt="arrow down" class="arrow-down">
                        </div>
                    </div>
                    <div class="item-content">
                        <p class="item-answer">
                            A store slug is your username and it's a part of the domain that will be displayed as your
                            website
                            link/URL. For example, the slug in"Test.youcan.store" is Test.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
