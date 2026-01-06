<!doctype html>
<html
    data-wf-domain="alture-template.webflow.io"
    data-wf-page="6840876d4d1ed0e8e2a330fc"
    data-wf-site="6840876d4d1ed0e8e2a330b9"
    lang="en"
>
<head>
    @include('partials.frontend.head')

    <style type="text/css">
        .home-header_content{
            background: url("{{ asset('assets/common/images/cover.png') }}") center center /cover;
        }

        .fs-1-rem{
            font-size: 1rem !important;
        }

        .fs-3-rem{
            font-size: 1rem !important;
        }

        .w-3-rem{
            width: 3rem !important;
        }

        .w-5-rem{
            width: 3rem !important;
        }

        .w-15-rem{
            width: 15rem !important;
        }

        .img-grayscale{
            filter: grayscale(100%);
            transition: .8s;
        }
        .img-grayscale:hover{
            filter: grayscale(0%);
            transition: .8s;
            /*scale: 1.05;*/
        }
    </style>
</head>
<body>
<div class="page-wrapper">
    <div class="brand_wrap">
        <img
            src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848c70609210c8d01d82882_logo-white.svg"
            loading="lazy"
            alt="logo"
            class="brand_logo"
        /><img
            src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68645cb339a0d03e31142f00_mask.png"
            loading="lazy"
            sizes="100vw"
            srcset="
                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68645cb339a0d03e31142f00_mask-p-500.png   500w,
                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68645cb339a0d03e31142f00_mask-p-800.png   800w,
                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68645cb339a0d03e31142f00_mask-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68645cb339a0d03e31142f00_mask-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68645cb339a0d03e31142f00_mask.png        1918w
                    "
            alt=""
            class="brand_lines"
        />
    </div>
    <nav class="navbar">
        <div class="padding-global is-small">
            <div class="navbar_component">
                <div class="navbar_content">
                    <div class="navbar_brand">
                        <a href="{{ url('/') }}" aria-current="page" class="navbar_logo-wrap w-inline-block w--current"><img src="{{ asset('assets/common/images/media-passion-logo.png') }}" loading="lazy" alt="" class="navbar_logo w-5-rem" /></a>
                    </div>
                    <div class="navbar_links-menu">
                        <div class="menu_component">
                            <div fs-scrolldisable-media="(max-width: 767px)" fs-scrolldisable-element="toggle" data-w-id="5fdd110c-b4dc-4c3b-f311-33bd343dda78" class="hamburger" >
                                <div class="hamburger_line _1"></div>
                                <div class="hamburger_line _2"></div>
                                <div class="hamburger_line _2"></div>
                            </div>
                            <div class="navbar_creative-text fs-3-rem">Your Brand. Our Passion.</div>
                            <div class="menu">
                                <div class="menu_in">
                                    <div class="menu_content">
                                        <div class="menu_links">
                                            <a
                                                href="/"
                                                data-w-id="34ea61be-4150-c0ab-66d0-326592b2e049"
                                                aria-current="page"
                                                class="menu_link w-inline-block w--current"
                                            ><div class="menu_link-texts">
                                                    <div class="menu_link-text _1">Home</div>
                                                    <div class="menu_link-text _2">Home</div>
                                                </div>
                                                <div class="menu_link-dot"></div></a
                                            ><a
                                                href="/studio"
                                                data-w-id="34ea61be-4150-c0ab-66d0-326592b2e049"
                                                class="menu_link w-inline-block"
                                            ><div class="menu_link-texts">
                                                    <div class="menu_link-text _1">Studio</div>
                                                    <div class="menu_link-text _2">Studio</div>
                                                </div>
                                                <div class="menu_link-dot"></div></a
                                            ><a
                                                href="/works/1"
                                                data-w-id="34ea61be-4150-c0ab-66d0-326592b2e049"
                                                class="menu_link w-inline-block"
                                            ><div class="menu_link-texts">
                                                    <div class="menu_link-text _1">Work</div>
                                                    <div class="menu_link-text _2">Work</div>
                                                </div>
                                                <div class="menu_link-dot"></div></a
                                            ><a
                                                href="/blog/1"
                                                data-w-id="34ea61be-4150-c0ab-66d0-326592b2e049"
                                                class="menu_link w-inline-block"
                                            ><div class="menu_link-texts">
                                                    <div class="menu_link-text _1">Blog</div>
                                                    <div class="menu_link-text _2">Blog</div>
                                                </div>
                                                <div class="menu_link-dot"></div></a
                                            ><a
                                                href="/contact/1"
                                                data-w-id="34ea61be-4150-c0ab-66d0-326592b2e049"
                                                class="menu_link w-inline-block"
                                            ><div class="menu_link-texts">
                                                    <div class="menu_link-text _1">Contact</div>
                                                    <div class="menu_link-text _2">Contact</div>
                                                </div>
                                                <div class="menu_link-dot"></div
                                                ></a>
                                        </div>
                                        <div class="menu_actions">
                                            <div class="menu_social-wrap">
                                                <div class="menu_buttons">
                                                    <a
                                                        href="https://webflow.com/templates/designers/templatesupply"
                                                        data-wf--button--variant="grey"
                                                        data-w-id="059e00b0-f64e-1901-eae8-f1971aea4566"
                                                        class="button-secondary w-inline-block"
                                                    ><div class="button_texts">
                                                            <div class="button_text _1">Buy template</div>
                                                            <div class="button_text _2">Buy template</div>
                                                        </div>
                                                        <div class="button-line_space blue-dark-36"></div>
                                                        <div class="button-line_dot blue-dark-37">
                                                            <div class="button_dot"></div>
                                                            <div class="button_dot-scale"></div></div></a
                                                    ><a
                                                        href="https://www.template.supply/"
                                                        data-wf--button--variant="grey"
                                                        data-w-id="059e00b0-f64e-1901-eae8-f1971aea4566"
                                                        target="_blank"
                                                        class="button-secondary w-inline-block"
                                                    ><div class="button_texts">
                                                            <div class="button_text _1">More templates</div>
                                                            <div class="button_text _2">More templates</div>
                                                        </div>
                                                        <div class="button-line_space blue-dark-36"></div>
                                                        <div class="button-line_dot blue-dark-37">
                                                            <div class="button_dot"></div>
                                                            <div class="button_dot-scale"></div></div
                                                        ></a>
                                                </div>
                                                <div class="menu_social">
                                                    <a
                                                        href="https://instagram.com"
                                                        target="_blank"
                                                        class="menu_social-link w-inline-block"
                                                    ><img
                                                            loading="lazy"
                                                            src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68642b559d94bcc3773fc317_social-insta.svg"
                                                            alt=""
                                                            class="menu_social-icon" /></a
                                                    ><a
                                                        href="https://x.com"
                                                        target="_blank"
                                                        class="menu_social-link w-inline-block"
                                                    ><img
                                                            loading="lazy"
                                                            src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68642b569d94bcc3773fc318_social-x.svg"
                                                            alt=""
                                                            class="menu_social-icon" /></a
                                                    ><a
                                                        href="https://dribbble.com"
                                                        target="_blank"
                                                        class="menu_social-link w-inline-block"
                                                    ><img
                                                            loading="lazy"
                                                            src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/686464e5c7256ddd81c074ee_dribble.svg"
                                                            alt=""
                                                            class="menu_social-icon"
                                                        /></a>
                                                </div>
                                            </div>
                                            <a
                                                data-w-id="5fdd110c-b4dc-4c3b-f311-33bd343dda97"
                                                href="/contact/2"
                                                class="menu_contact w-inline-block"
                                            ><img
                                                    src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68474f06add2ed267a218556_link.png"
                                                    loading="lazy"
                                                    sizes="(max-width: 1400px) 100vw, 1400px"
                                                    srcset="
                                                                https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68474f06add2ed267a218556_link-p-500.png   500w,
                                                                https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68474f06add2ed267a218556_link-p-800.png   800w,
                                                                https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68474f06add2ed267a218556_link-p-1080.png 1080w,
                                                                https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68474f06add2ed267a218556_link.png        1400w
                                                            "
                                                    alt=""
                                                    class="menu_contact-img" />
                                                <div class="menu-contact-link">
                                                    <div class="menu_contact-text">Contact</div>
                                                    <img
                                                        src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6847494a49644635f62a1bc0_arrow-white-diagonal.svg"
                                                        loading="lazy"
                                                        alt=""
                                                        class="menu_contact-arrow"
                                                    /></div
                                                ></a>
                                            <div class="menu_legal">
                                                <a
                                                    href="/legal/privacy-policy"
                                                    data-w-id="08715bc4-c4b7-73ba-45ba-b2d079cf51c2"
                                                    class="menu_legal-link w-inline-block"
                                                ><div class="menu_legal-text">Privacy Policy</div>
                                                    <div class="menu_legal-line grey"></div></a
                                                ><a
                                                    href="/legal/terms-of-use"
                                                    data-w-id="08715bc4-c4b7-73ba-45ba-b2d079cf51c2"
                                                    class="menu_legal-link w-inline-block"
                                                ><div class="menu_legal-text">Terms of use</div>
                                                    <div class="menu_legal-line grey"></div
                                                    ></a>
                                            </div>
                                        </div>
                                        <div
                                            data-w-id="5fdd110c-b4dc-4c3b-f311-33bd343ddaa2"
                                            class="menu_close"
                                        >
                                            <img
                                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68474e628bed528dd7a4be9e_close.svg"
                                                loading="lazy"
                                                alt=""
                                                class="menu_close-icon"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu_bg-blur"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div style="--blur: 1rem; --ratio: 2" class="progressive-blur_wrap">
        <div style="--i: 6" class="progressive-blur_panel is-1"></div>
        <div style="--i: 5" class="progressive-blur_panel is-2"></div>
        <div style="--i: 4" class="progressive-blur_panel is-3"></div>
        <div style="--i: 3" class="progressive-blur_panel is-4"></div>
        <div style="--i: 2" class="progressive-blur_panel is-5"></div>
        <div style="--i: 1" class="progressive-blur_panel is-6"></div>
        <div style="--i: 1" class="progressive-blur_panel is-7"></div>
        <div style="--i: 1" class="progressive-blur_panel is-8"></div>
        <div style="--i: 1" class="progressive-blur_panel is-9"></div>
        <div style="--i: 1" class="progressive-blur_panel is-10"></div>
    </div>
    <main class="main-wrapper">
        <section class="section_home-header">
            <div class="padding-section-small is-mobile-medium"></div>
            <div class="padding-global">
                <div class="home-header_headings" style="margin-bottom: 40px;">
                </div>
            </div>
            <div class="spacer-small"></div>
            <div class="home-header_component">
                <div class="home-header_content">
                    <div data-poster-url="{{ asset('assets/common/images/cover.png') }}" class="home-header_video w-background-video w-background-video-atom" >
                    </div>
                    <div class="home-header_services">
                        <div id="w-node-aade086f-db13-2dbd-cf71-963e5d8244b6-e2a330fc" class="home-header_service">
                            <div class="home-header_service-text">Branding</div>
                            <div class="home-header_service-line"></div>
                        </div>
                        <div id="w-node-_12b55e05-490c-cb66-a5e2-467df4b76106-e2a330fc" class="home-header_service">
                            <div class="home-header_service-text">Campaigns</div>
                            <div class="home-header_service-line"></div>
                        </div>
                        <div id="w-node-_8c28dbeb-75ce-0167-6c96-4af0cf687f56-e2a330fc" class="home-header_service">
                            <div class="home-header_service-text">Content & Digital</div>
                            <div class="home-header_service-line"></div>
                        </div>
                        <div id="w-node-_49dc60d5-d371-5104-1947-697bb68cd950-e2a330fc" class="home-header_service">
                            <div class="home-header_service-text">Experiences</div>
                            <div class="home-header_service-line"></div>
                        </div>
                    </div>
                    <div class="home-header_bottom">
                        <div class="home-header_subheading">
                            <div class="home-header_label">We are weavers of</div>
                            <div class="spacer-xsmall"></div>
                            <h3 class="home-header_subhead">Not just a studio, we are</h3>
                            <div class="home-header_words-wrap">
                                <div style="-webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0); -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0); -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0); transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);" class="home-header_words">
                                    <div class="home-header_word">
                                        <div class="home-header_subhead">Ideas.</div>
                                    </div>
                                    <div class="home-header_word _2">
                                        <div class="home-header_subhead">Ideas.</div>
                                    </div>
                                    <div class="home-header_word _3">
                                        <div class="home-header_subhead">Ideas.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section_work-list">
            <div class="padding-global is-tiny">
                <div data-w-id="f8cd9a3a-3e01-4e7f-30db-ecd0dcc6e07a" class="line"></div>
            </div>
            <div class="padding-section-small"></div>
            <div class="padding-global">
                <div class="work-list_component">
                    <div class="container-medium">
                        <div class="work-list_head">
                            <div class="work-list_heading-wrap">
                                <h2 data-w-id="cb3ed43d-4fec-c076-6ad9-ca979cbce945" class="heading-style-display">
                                    Selected<br />Work.
                                </h2>
                            </div>
                            <div id="w-node-b6de4e29-e0e7-22f5-a3fb-f6f4ae8848d0-e2a330fc" class="work-list_head-texts">
                                <h2 data-w-id="3cde3e8e-9cf9-f0b1-0571-18bb109027d6" class="text-style-label hide-tablet">Projects</h2>
                                <div data-w-id="2d1acec6-4c9c-26ee-8926-bff6869d7e09" class="text-size-grey-400">
                                    <p class="text-size-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="spacer-huge"></div>
                    <div class="padding-global is-tiny tablet-bigger">
                        <div class="home-about_component">
                            <div role="listitem" class="work-list_item w-dyn-item">
                                <div data-w-id="488e7777-71b2-7e36-4789-2206a7bd01df" class="work-list_block">
                                    <a aria-label="link to work page" data-w-id="488e7777-71b2-7e36-4789-2206a7bd01e0" href="javascript:void(0);" class="work-list_link img-grayscale">
                                        <img loading="eager" src="{{ asset('assets/common/images/projects/img-01.jpg') }}" alt="" class="work-list_img" />
                                        <div class="work-list_name">
                                            <div class="work-list_dot"></div>
                                            <h3 class="work-list_title">Branding</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div role="listitem" class="work-list_item w-dyn-item">
                                <div data-w-id="488e7777-71b2-7e36-4789-2206a7bd01df" class="work-list_block">
                                    <a aria-label="link to work page" data-w-id="488e7777-71b2-7e36-4789-2206a7bd01e0" href="javascript:void(0);" class="work-list_link img-grayscale">
                                        <img loading="eager" src="{{ asset('assets/common/images/projects/img-02.jpg') }}" alt="" class="work-list_img" />
                                        <div class="work-list_name">
                                            <div class="work-list_dot"></div>
                                            <h3 class="work-list_title">Campaigns</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div role="listitem" class="work-list_item w-dyn-item">
                                <div data-w-id="488e7777-71b2-7e36-4789-2206a7bd01df" class="work-list_block">
                                    <a aria-label="link to work page" data-w-id="488e7777-71b2-7e36-4789-2206a7bd01e0" href="javascript:void(0);" class="work-list_link img-grayscale">
                                        <img loading="eager" src="{{ asset('assets/common/images/projects/img-03.jpg') }}" alt="" class="work-list_img" />
                                        <div class="work-list_name">
                                            <div class="work-list_dot"></div>
                                            <h3 class="work-list_title">Animation</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div role="listitem" class="work-list_item w-dyn-item">
                                <div data-w-id="488e7777-71b2-7e36-4789-2206a7bd01df" class="work-list_block">
                                    <a aria-label="link to work page" data-w-id="488e7777-71b2-7e36-4789-2206a7bd01e0" href="javascript:void(0);" class="work-list_link img-grayscale">
                                        <img loading="eager" src="{{ asset('assets/common/images/projects/img-04.jpg') }}" alt="" class="work-list_img" />
                                        <div class="work-list_name">
                                            <div class="work-list_dot"></div>
                                            <h3 class="work-list_title">Branding</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="df95053b-751c-33b6-14d2-a4763aca7f98" class="hover_wrap">
                        <div data-w-id="df95053b-751c-33b6-14d2-a4763aca7f99" class="hover_pill">
                            <div data-w-id="df95053b-751c-33b6-14d2-a4763aca7f9a" class="hover_text-wrap">
                                <div data-w-id="df95053b-751c-33b6-14d2-a4763aca7f9b" class="hover_text">
                                    View work
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="spacer-large"></div>
                    <div data-w-id="86b9f3af-cb4f-5a69-3de4-8d0df7f0b23e" class="fade-in">
                        <a href="javascript:void(0);" data-wf--button--variant="black" data-w-id="059e00b0-f64e-1901-eae8-f1971aea4566" class="button-secondary w-variant-f874b9ba-24b5-50ff-0733-53dd5363b8cf w-inline-block" >
                            <div class="button_texts">
                                <div class="button_text _1">View all projects</div>
                                <div class="button_text _2">View all projects</div>
                            </div>
                            <div class="button-line_space blue-dark-36"></div>
                            <div class="button-line_dot blue-dark-37">
                                <div class="button_dot"></div>
                                <div class="button_dot-scale"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="padding-section-medium"></div>
        </section>
        <section class="section_home-grid">
            <div class="padding-global is-tiny"><div class="line"></div></div>
            <div class="padding-section-small"></div>
            <div class="padding-global">
                <div class="container-medium">
                    <div class="head-grid">
                        <div data-w-id="0d0c621e-8f16-a9c8-4eae-928122e0dce9" class="label_wrap">
                            <div class="label_dot"></div>
                            <h2 class="text-style-label">Why work with us</h2>
                        </div>
                        <div data-w-id="5b5acb40-3dd8-2606-340d-9826a9ee5559" class="brands_heading">
                            <h3 class="heading-style-h4">
                                We help ambitious brands make their mark—with clarity and precision.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-xlarge"></div>
            <div class="padding-global is-tiny">
                <div class="home-grid_component">
                    <div
                        id="w-node-e350f601-f47b-bc74-3ba9-1a4e5d11a3e3-e2a330fc"
                        data-w-id="e350f601-f47b-bc74-3ba9-1a4e5d11a3e3"
                        class="home-grid_team"
                    >
                        <h4 class="home-grid_team-heading">A strong team of experts</h4>
                        <div
                            style="
                                        -webkit-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                            rotateZ(0deg) skew(0, 0);
                                        -moz-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                            rotateZ(0deg) skew(0, 0);
                                        -ms-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                            rotateZ(0deg) skew(0, 0);
                                        transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                            rotateZ(0deg) skew(0, 0);
                                    "
                            class="home-grid_circle-1"
                        >
                            <a href="javascript:void(0);" class="w-lightbox"><img src="{{ asset('assets/common/images/FACES-01.jpg') }}" loading="lazy" alt="" class="home-grid_member _1" /></a>
                            <img src="{{ asset('assets/common/images/FACES-02.jpg') }}" loading="lazy" alt="" class="home-grid_member _2" />
                            <img src="{{ asset('assets/common/images/FACES-03.jpg') }}" loading="lazy" alt="" class="home-grid_member _3" />
                            <img src="{{ asset('assets/common/images/FACES-04.jpg') }}" loading="lazy" alt="" class="home-grid_member _4" />
                        </div>
                        <div
                            style="
                                        -webkit-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                            rotateZ(0deg) skew(0, 0);
                                        -moz-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                            rotateZ(0deg) skew(0, 0);
                                        -ms-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                            rotateZ(0deg) skew(0, 0);
                                        transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                            rotateZ(0deg) skew(0, 0);
                                    "
                            class="home-grid_circle-2"
                        >
                            <img src="{{ asset('assets/common/images/FACES-05.jpg') }}" loading="lazy" alt="" class="home-grid_member-in _1" />
                            <img src="{{ asset('assets/common/images/FACES-06.jpg') }}" loading="lazy" alt="" class="home-grid_member-in _2" />
                            <img src="{{ asset('assets/common/images/FACES-07.jpg') }}" loading="lazy" alt="" class="home-grid_member-in _3" />
                        </div>
                    </div>
                    <div data-w-id="1a241269-bfb8-9220-a73e-cf86b1f65921" class="home-grid_chat">
                        <div class="home-about_content">
                            <div data-w-id="f0195ee1-c983-a8a6-c1ae-057fcb149399" class="label_wrap">
                                <div class="label_dot"></div>
                                <h2 class="text-style-label">About us</h2>
                            </div>
                            <div class="spacer-medium is-tablet-smaller"></div>
                            <h2 data-w-id="eafc4a11-c04e-02a7-5f67-f8039b492966" class="heading-style-h4">
                                We’re a hands-on digital agency building thoughtful solutions for ambitious
                                brands.
                            </h2>
                            <div class="spacer-medium is-tablet-smaller"></div>
                            <div data-w-id="6fd397a1-e8a4-fff3-aabb-decb46ecf7fe" class="home-about_text-wrap">
                                <div class="text-color-grey-500">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                        varius enim in eros elementum tristique. Duis cursus, mi quis viverra.
                                    </p>
                                </div>
                            </div>
                            <div class="spacer-large is-tablet-smaller"></div>
                            <div data-w-id="8fc829b0-3e81-4d30-2a87-eeaff1507aa1" class="fade-in">
                                <a
                                    href="/studio"
                                    data-wf--button--variant="black"
                                    data-w-id="059e00b0-f64e-1901-eae8-f1971aea4566"
                                    class="button-secondary w-variant-f874b9ba-24b5-50ff-0733-53dd5363b8cf w-inline-block"
                                ><div class="button_texts">
                                        <div class="button_text _1">More about us</div>
                                        <div class="button_text _2">More about us</div>
                                    </div>
                                    <div class="button-line_space blue-dark-36"></div>
                                    <div class="button-line_dot blue-dark-37">
                                        <div class="button_dot"></div>
                                        <div class="button_dot-scale"></div></div
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="spacer-huge"></div>
        <section data-w-id="e6ee1a6c-2902-b24b-361f-5ba830cbef85" class="section_home-services">
            <div class="padding-global is-tiny">
                <div class="home-services_component">
                    <div class="padding-section-small"></div>
                    <div class="padding-global">
                        <div class="container-medium">
                            <div class="head-grid">
                                <div class="text-color-white"><h2 class="text-weight-medium">What We Do</h2></div>
                                <div class="home-services_head">
                                    <div class="home-services_icons">
                                        <img
                                            src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848ab85cf257420c02231d5_close-white.svg"
                                            loading="lazy"
                                            alt=""
                                            class="home-services_icon"
                                        /><img
                                            src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848ab85cf257420c02231d5_close-white.svg"
                                            loading="lazy"
                                            alt=""
                                            class="home-services_icon"
                                        /><img
                                            src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848ab85cf257420c02231d5_close-white.svg"
                                            loading="lazy"
                                            alt=""
                                            class="home-services_icon"
                                        /><img
                                            src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848ab85cf257420c02231d5_close-white.svg"
                                            loading="lazy"
                                            alt=""
                                            class="home-services_icon"
                                        />
                                    </div>
                                    <div class="text-color-white">
                                        <div class="heading-style-h2 text-weight-medium">(04)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer-xlarge is-mobile-medium"></div>
                            <div class="head-grid">
                                <div
                                    id="w-node-e9a97131-8855-95c0-d8dd-d2a7a42d1ea8-e2a330fc"
                                    class="home-services_content"
                                >
                                    <div class="home-services_items">
                                        <div class="home-services_item">
                                            <div
                                                data-w-id="e9a97131-8855-95c0-d8dd-d2a7a42d1eb6"
                                                class="line is-darker"
                                            ></div>
                                            <div class="home-services_item-in">
                                                <div class="home-services_examples">
                                                    <div class="home-services_item-head">
                                                        <div class="home-services_number"><div>1</div></div>
                                                        <h2 class="home-services_title">Web design</h2>
                                                    </div>
                                                    <div class="home-services_services">
                                                        <div class="home-services_service">Website</div>
                                                        <div class="home-services_service">Wireframe</div>
                                                        <div class="home-services_service">Landing page</div>
                                                        <div class="home-services_service">Dashboard</div>
                                                        <div class="home-services_service">Product</div>
                                                    </div>
                                                </div>
                                                <div
                                                    id="w-node-e9a97131-8855-95c0-d8dd-d2a7a42d1ebe-e2a330fc"
                                                    class="home-services_desc"
                                                >
                                                    <div class="home-services_img-wrap">
                                                        <img
                                                            sizes="(max-width: 600px) 100vw, 600px"
                                                            srcset="
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848af0ebc3d819cc02a6749_website-p-500.jpg 500w,
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848af0ebc3d819cc02a6749_website.jpg       600w
                                                                    "
                                                            alt="A flat screen tv sitting on top of a wooden table."
                                                            src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848af0ebc3d819cc02a6749_website.jpg"
                                                            loading="eager"
                                                            class="home-services_img"
                                                        />
                                                    </div>
                                                    <div class="home-services_text-wrap">
                                                        <p class="text-color-grey-300">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit. Suspendisse varius enim in eros elementum
                                                            tristique. Duis cursus, mi quis viverra ornare.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home-services_item">
                                            <div
                                                data-w-id="e9a97131-8855-95c0-d8dd-d2a7a42d1ec5"
                                                class="line is-darker"
                                            ></div>
                                            <div class="home-services_item-in">
                                                <div class="home-services_examples">
                                                    <div class="home-services_item-head">
                                                        <div class="home-services_number"><div>2</div></div>
                                                        <h2 class="home-services_title">Branding</h2>
                                                    </div>
                                                    <div class="home-services_services">
                                                        <div class="home-services_service">Logo</div>
                                                        <div class="home-services_service">Packaging</div>
                                                        <div class="home-services_service">Mockup</div>
                                                        <div class="home-services_service">Deck</div>
                                                        <div class="home-services_service">Visual identity</div>
                                                        <div class="home-services_service">Guidelines</div>
                                                    </div>
                                                </div>
                                                <div
                                                    id="w-node-e9a97131-8855-95c0-d8dd-d2a7a42d1ecd-e2a330fc"
                                                    class="home-services_desc"
                                                >
                                                    <div class="home-services_img-wrap">
                                                        <img
                                                            sizes="(max-width: 1309px) 100vw, 1309px"
                                                            srcset="
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848a64bfe0f783ef4780c7b_Close-up%20of%20Person%20in%20Gray%20Puffer%20Jacket.webp  500w,
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848a64bfe0f783ef4780c7b_Close-up%20of%20Person%20in%20Gray%20Puffer%20Jacket.webp  800w,
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848a64bfe0f783ef4780c7b_Close-up%20of%20Person%20in%20Gray%20Puffer%20Jacket.webp 1080w,
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848a64bfe0f783ef4780c7b_Close-up%20of%20Person%20in%20Gray%20Puffer%20Jacket.webp 1309w
                                                                    "
                                                            alt="A young man wearing a grey hooded jacket."
                                                            src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848a64bfe0f783ef4780c7b_Close-up%20of%20Person%20in%20Gray%20Puffer%20Jacket.webp"
                                                            loading="eager"
                                                            class="home-services_img"
                                                        />
                                                    </div>
                                                    <div class="home-services_text-wrap">
                                                        <p class="text-color-grey-300">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit. Suspendisse varius enim in eros elementum
                                                            tristique. Duis cursus, mi quis viverra ornare.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home-services_item">
                                            <div
                                                data-w-id="e9a97131-8855-95c0-d8dd-d2a7a42d1ed4"
                                                class="line is-darker"
                                            ></div>
                                            <div class="home-services_item-in">
                                                <div class="home-services_examples">
                                                    <div class="home-services_item-head">
                                                        <div class="home-services_number"><div>3</div></div>
                                                        <h2 class="home-services_title">Content</h2>
                                                    </div>
                                                    <div class="home-services_services">
                                                        <div class="home-services_service">UX writing</div>
                                                        <div class="home-services_service">Social content</div>
                                                        <div class="home-services_service">Campaign</div>
                                                        <div class="home-services_service">Deck</div>
                                                        <div class="home-services_service">Advertising</div>
                                                    </div>
                                                </div>
                                                <div
                                                    id="w-node-e9a97131-8855-95c0-d8dd-d2a7a42d1edc-e2a330fc"
                                                    class="home-services_desc"
                                                >
                                                    <div class="home-services_img-wrap">
                                                        <img
                                                            sizes="(max-width: 820px) 100vw, 820px"
                                                            srcset="
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848afd2cfd7de6c42102435_keyboard-p-500.jpeg 500w,
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848afd2cfd7de6c42102435_keyboard-p-800.jpeg 800w,
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848afd2cfd7de6c42102435_keyboard.jpeg       820w
                                                                    "
                                                            alt="A close up of a person typing on a laptop."
                                                            src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848afd2cfd7de6c42102435_keyboard.jpeg"
                                                            loading="eager"
                                                            class="home-services_img"
                                                        />
                                                    </div>
                                                    <div class="home-services_text-wrap">
                                                        <p class="text-color-grey-300">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit. Suspendisse varius enim in eros elementum
                                                            tristique. Duis cursus, mi quis viverra ornare.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home-services_item padding-small">
                                            <div
                                                data-w-id="e9a97131-8855-95c0-d8dd-d2a7a42d1ee3"
                                                class="line is-darker"
                                            ></div>
                                            <div class="home-services_item-in">
                                                <div class="home-services_examples">
                                                    <div class="home-services_item-head">
                                                        <div class="home-services_number"><div>4</div></div>
                                                        <h2 class="home-services_title">Social media</h2>
                                                    </div>
                                                    <div class="home-services_services">
                                                        <div class="home-services_service">Strategy</div>
                                                        <div class="home-services_service">Growth</div>
                                                        <div class="home-services_service">Campaign</div>
                                                        <div class="home-services_service">Posts</div>
                                                        <div class="home-services_service">Design</div>
                                                        <div class="home-services_service">Content</div>
                                                    </div>
                                                </div>
                                                <div
                                                    id="w-node-e9a97131-8855-95c0-d8dd-d2a7a42d1eeb-e2a330fc"
                                                    class="home-services_desc"
                                                >
                                                    <div class="home-services_img-wrap">
                                                        <img
                                                            sizes="(max-width: 2400px) 100vw, 2400px"
                                                            srcset="
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848a64bfe0f783ef4780c85_Close-Up%2520Knitwear%2520Duo-p-500.jpeg   500w,
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848a64bfe0f783ef4780c85_Close-Up%2520Knitwear%2520Duo-p-800.jpeg   800w,
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848a64bfe0f783ef4780c85_Close-Up%2520Knitwear%2520Duo-p-1080.jpeg 1080w,
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848a64bfe0f783ef4780c85_Close-Up%2520Knitwear%2520Duo-p-1600.jpeg 1600w,
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848a64bfe0f783ef4780c85_Close-Up%2520Knitwear%2520Duo-p-2000.jpeg 2000w,
                                                                        https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848a64bfe0f783ef4780c85_Close-Up%20Knitwear%20Duo.jpeg            2400w
                                                                    "
                                                            alt="A man and a woman standing next to each other."
                                                            src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848a64bfe0f783ef4780c85_Close-Up%20Knitwear%20Duo.jpeg"
                                                            loading="eager"
                                                            class="home-services_img"
                                                        />
                                                    </div>
                                                    <div class="home-services_text-wrap">
                                                        <p class="text-color-grey-300">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit. Suspendisse varius enim in eros elementum
                                                            tristique. Duis cursus, mi quis viverra ornare.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a
                                        href="/contact/3"
                                        data-wf--button--variant="grey"
                                        data-w-id="059e00b0-f64e-1901-eae8-f1971aea4566"
                                        class="button-secondary w-inline-block"
                                    ><div class="button_texts">
                                            <div class="button_text _1">Get in touch</div>
                                            <div class="button_text _2">Get in touch</div>
                                        </div>
                                        <div class="button-line_space blue-dark-36"></div>
                                        <div class="button-line_dot blue-dark-37">
                                            <div class="button_dot"></div>
                                            <div class="button_dot-scale"></div></div
                                        ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="padding-section-small"></div>
                </div>
            </div>
        </section>

        <section data-w-id="0f16d970-3858-501c-35ad-50ff5a2db9ca" class="section_brands">
            <div class="padding-section-medium"></div>
            <div class="padding-global">
                <div class="container-medium">
                    <div class="head-grid">
                        <div data-w-id="815e1567-e8d8-3887-7b4f-e61b59defca3" class="label_wrap">
                            <div class="label_dot"></div>
                            <h2 class="text-style-label">Partners</h2>
                        </div>
                        <div data-w-id="0f16d970-3858-501c-35ad-50ff5a2db9d4" class="brands_heading">
                            <h3 class="heading-style-h4">
                                We collaborate with forward-thinking brands to build lasting creative impact.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-xlarge"></div>
            <div data-w-id="0f16d970-3858-501c-35ad-50ff5a2db9d9" class="brands_list-wrapper">
                <div
                    style="
                                -webkit-transform: translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                -moz-transform: translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                    skew(0, 0);
                                -ms-transform: translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                    skew(0, 0);
                                transform: translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                    skew(0, 0);
                            "
                    class="brands_list"
                >
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68483fd8df02d2a2a16059d2_logo-1.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848402b2b7a4408294ff7c4_logo-2.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848403301c0b927354b0f45_logo-3.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848403a5135f3b8335421d2_logo-4.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68484040114a88fbe9ea899b_logo-5.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68484048be11ba231a546a2e_logo-6.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68484050852d017199f1ad66_logo-7.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68484058d2638513af23d247_logo-8.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                </div>
                <div
                    style="
                                -webkit-transform: translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                -moz-transform: translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                    skew(0, 0);
                                -ms-transform: translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                    skew(0, 0);
                                transform: translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                    skew(0, 0);
                            "
                    class="brands_list"
                >
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68483fd8df02d2a2a16059d2_logo-1.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848402b2b7a4408294ff7c4_logo-2.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848403301c0b927354b0f45_logo-3.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848403a5135f3b8335421d2_logo-4.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68484040114a88fbe9ea899b_logo-5.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68484048be11ba231a546a2e_logo-6.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68484050852d017199f1ad66_logo-7.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68484058d2638513af23d247_logo-8.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                </div>
                <div
                    style="
                                -webkit-transform: translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                -moz-transform: translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                    skew(0, 0);
                                -ms-transform: translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                    skew(0, 0);
                                transform: translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                    skew(0, 0);
                            "
                    class="brands_list"
                >
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68483fd8df02d2a2a16059d2_logo-1.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848402b2b7a4408294ff7c4_logo-2.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848403301c0b927354b0f45_logo-3.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/6848403a5135f3b8335421d2_logo-4.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68484040114a88fbe9ea899b_logo-5.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68484048be11ba231a546a2e_logo-6.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68484050852d017199f1ad66_logo-7.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <div class="brands_item-block">
                        <div class="brands_item-logo-wrap">
                            <img
                                src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68484058d2638513af23d247_logo-8.svg"
                                loading="lazy"
                                alt=""
                                class="brands_item-logo"
                            />
                        </div>
                        <div class="brands_item-texts">
                            <h4 class="brands_item-name">Loreipsum</h4>
                            <p class="brands_item-desc">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="padding-section-medium"></div>
        </section>

        <section class="section_cta">
            <div class="padding-global is-tiny">
                <div class="cta_component">
                    <div class="padding-section-medium"></div>
                    <div class="padding-global">
                        <div class="cta_content">
                            <div data-w-id="a96576e7-0ca7-fa5e-89ee-4643797a680f" class="text-align-center">
                                <div class="text-color-white">
                                    <h2 class="heading-style-h1 font-weight-medium">
                                        Start your project with Alture®
                                    </h2>
                                </div>
                            </div>
                            <div class="spacer-large"></div>
                            <div data-w-id="a96576e7-0ca7-fa5e-89ee-4643797a6814" class="fade-in">
                                <a
                                    href="/contact/2"
                                    data-wf--button--variant="white"
                                    data-w-id="059e00b0-f64e-1901-eae8-f1971aea4566"
                                    class="button-secondary w-variant-084c35ac-0c40-f906-a9cd-0d43386a2d5d w-inline-block"
                                ><div class="button_texts">
                                        <div class="button_text _1">Get in touch</div>
                                        <div class="button_text _2">Get in touch</div>
                                    </div>
                                    <div class="button-line_space blue-dark-36"></div>
                                    <div class="button-line_dot blue-dark-37">
                                        <div class="button_dot"></div>
                                        <div class="button_dot-scale"></div></div
                                    ></a>
                            </div>
                        </div>
                    </div>
                    <div class="padding-section-medium"></div>

                    <div class="interaction_cms_wrap">
                        <div class="interaction_cms_list">
                            <div class="interaction_cms_item">
                                <img class="interaction_cms-img_img" src="{{ asset('assets/frontend/images/1.webp') }}" alt="" />
                            </div>
                            <div class="interaction_cms_item">
                                <img class="interaction_cms-img_img" src="{{ asset('assets/frontend/images/2.webp') }}" alt="" />
                            </div>
                            <div class="interaction_cms_item">
                                <img class="interaction_cms-img_img" src="{{ asset('assets/frontend/images/3.webp') }}" alt="" />
                            </div>
                            <div class="interaction_cms_item">
                                <img class="interaction_cms-img_img" src="{{ asset('assets/frontend/images/4.webp') }}" alt="" />
                            </div>
                            <div class="interaction_cms_item">
                                <img class="interaction_cms-img_img" src="{{ asset('assets/frontend/images/5.webp') }}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div data-w-id="a96576e7-0ca7-fa5e-89ee-4643797a6828" class="cta_note">
                        <div class="note-marquee_component">
                            <div class="note-marquee_in">
                                <div class="note-marquee_text">Move your mouse —</div>
                                <div class="note-marquee_text">Move your mouse —</div>
                                <div class="note-marquee_text">Move your mouse —</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="padding-global is-tiny">
            <div class="footer_wrap">
                <div class="footer_component">
                    <div class="footer_main">
                        <div class="footer_links-groups">
                            <div
                                id="w-node-_49f89e0f-c321-7bff-a29b-8acdeddf7dc8-eddf7dc2"
                                class="footer_group"
                            >
                                <div class="footer_link-label">Pages</div>
                                <div class="footer_lists">
                                    <div class="footer_links-list">
                                        <a href="/" aria-current="page" class="footer_link w--current">Home</a
                                        ><a href="/studio" class="footer_link">Studio</a
                                        ><a href="#" class="footer_link">Work item</a>
                                    </div>
                                    <div class="footer_links-list">
                                        <a href="/works/1" class="footer_link">Works 1</a
                                        ><a href="/works/2" class="footer_link">Works 2</a
                                        ><a href="/works/3" class="footer_link">Works 3</a>
                                    </div>
                                    <div class="footer_links-list">
                                        <a href="/blog/1" class="footer_link">Blog 1</a
                                        ><a href="/blog/2" class="footer_link">Blog 2</a
                                        ><a href="/blog/3" class="footer_link">Blog 3</a>
                                    </div>
                                    <div class="footer_links-list">
                                        <a href="/contact/1" class="footer_link">Contact 1</a
                                        ><a href="/contact/2" class="footer_link">Contact 2</a
                                        ><a href="/contact/3" class="footer_link">Contact 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer_secondary">
                            <div class="footer_social">
                                <a
                                    href="https://instagram.com"
                                    target="_blank"
                                    class="footer_social-link w-inline-block"
                                ><img
                                        loading="lazy"
                                        src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68642b559d94bcc3773fc317_social-insta.svg"
                                        alt=""
                                        class="footer_social-icon" /></a
                                ><a
                                    href="https://x.com"
                                    target="_blank"
                                    class="footer_social-link w-inline-block"
                                ><img
                                        loading="lazy"
                                        src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/68642b569d94bcc3773fc318_social-x.svg"
                                        alt=""
                                        class="footer_social-icon" /></a
                                ><a
                                    href="https://dribbble.com/"
                                    target="_blank"
                                    class="footer_social-link w-inline-block"
                                ><img
                                        loading="lazy"
                                        src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/686464e5c7256ddd81c074ee_dribble.svg"
                                        alt=""
                                        class="footer_social-icon"
                                    /></a>
                            </div>
                            <div class="footer_newsletter w-form">
                                <form
                                    id="wf-form-Newsletter-form"
                                    name="wf-form-Newsletter-form"
                                    data-name="Newsletter form"
                                    method="get"
                                    class="footer_newsletter-form"
                                    data-wf-page-id="6840876d4d1ed0e8e2a330fc"
                                    data-wf-element-id="49f89e0f-c321-7bff-a29b-8acdeddf7df1"
                                >
                                    <label for="email-3" class="field-label">Join the newsletter</label>
                                    <div class="footer_field-wrap">
                                        <input
                                            class="footer_field w-input"
                                            maxlength="256"
                                            name="Email"
                                            data-name="Email"
                                            placeholder="Email*"
                                            type="email"
                                            id="Email"
                                            required=""
                                        /><input
                                            type="submit"
                                            data-wait="Please wait..."
                                            class="footer_newsletter-button w-button"
                                            value="Subscribe"
                                        />
                                    </div>
                                </form>
                                <div class="form_success-message-2 w-form-done">
                                    <div>Your submission has been received!</div>
                                </div>
                                <div class="form_error-message w-form-fail">
                                    <div>Oops! Something went wrong while submitting the form.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer_legal-links">
                        <div
                            id="w-node-_49f89e0f-c321-7bff-a29b-8acdeddf7dfe-eddf7dc2"
                            class="footer_legal-wrap"
                        >
                            <div class="footer_copyright">© 2025 Alture</div>
                            <div class="footer_legal-divider"></div>
                            <div class="footer_copyright">
                                Powered by
                                <a href="https://webflow.com/" target="_blank" class="footer_template-link"
                                >Webflow</a
                                >
                            </div>
                            <div class="footer_legal-divider"></div>
                            <div class="footer_copyright">
                                Created by
                                <a
                                    href="https://www.template.supply/"
                                    target="_blank"
                                    class="footer_template-link"
                                >Template Supply</a
                                >
                            </div>
                        </div>
                        <div
                            id="w-node-_49f89e0f-c321-7bff-a29b-8acdeddf7e0b-eddf7dc2"
                            class="footer_template-links"
                        >
                            <a href="/template/style-guide" class="footer_template-link">Style guide</a
                            ><a href="/template/licenses" class="footer_template-link">Licenses</a
                            ><a href="/template/changelog" class="footer_template-link">Changelog</a
                            ><a href="/template/instructions" class="footer_template-link">Instructions</a>
                        </div>
                    </div>
                </div>
                <div class="footer_brand">Alture<span class="footer_mark">®</span></div>
            </div>
        </div>
    </footer>
</div>
<script
    src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6840876d4d1ed0e8e2a330b9"
    type="text/javascript"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/js/webflow.schunk.36b8fb49256177c8.js"
    type="text/javascript"
></script>
<script
    src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/js/webflow.schunk.d61b41edd968cc6d.js"
    type="text/javascript"
></script>
<script
    src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/js/webflow.schunk.9dfb96661114d3db.js"
    type="text/javascript"
></script>
<script
    src="https://cdn.prod.website-files.com/6840876d4d1ed0e8e2a330b9/js/webflow.71cf1f9c.b9b1c61eb07f68de.js"
    type="text/javascript"
></script>
<script src="https://cdn.prod.website-files.com/gsap/3.13.0/gsap.min.js" type="text/javascript"></script>
<!-- Lennis setup -->
<script>
    // Initialize Lenis
    const lenis = new Lenis({
        smooth: true,
        lerp: 0.1,
        wheelMultiplier: 1,
        infinite: false,
    });

    // Use requestAnimationFrame to continuously update the scroll
    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);
</script>
<!-- Mouse trail CTA animation powered by GSAP -->
<script>
    $(".section_cta").each(function () {
        // Select key elements inside each CTA section
        let visualWrap = $(this).find(".interaction_visual_wrap"); // Container where the image clones will be animated
        let template = $(this).find(".interaction_img_wrap"); // Image template to clone
        let cmsItem = $(this).find(".interaction_cms_item"); // All CMS items with images
        let activeItem = cmsItem.first(); // Start with the first CMS item

        // Function to get the next image URL (loops through CMS items)
        function getNextUrl() {
            activeItem = activeItem.next(); // Move to the next item
            if (activeItem.length === 0) activeItem = cmsItem.first(); // Loop back if at the end
            return activeItem.find("img").attr("src"); // Return the image URL
        }

        // Track mouse position
        let xPosition = 0;
        let yPosition = 0;

        // Mouse move handler
        $(this).on("mousemove", function (e) {
            let xDistance = xPosition;
            let yDistance = yPosition;

            // Only trigger animation if mouse moved significantly
            if (Math.abs(xPosition - e.pageX) > 100 || Math.abs(yPosition - e.pageY) > 100) {
                xPosition = e.pageX;
                yPosition = e.pageY;

                // Clone the image template and append to the visual container
                let imageWrap = template.clone().appendTo(visualWrap);
                imageWrap.find("img").attr("src", getNextUrl()); // Set image source

                // Create GSAP timeline animation
                let tl = gsap.timeline({
                    onComplete: () => {
                        imageWrap.remove();
                    }, // Remove the clone after animation completes
                });

                // Fade in the image clone
                tl.fromTo(imageWrap, { opacity: 0 }, { opacity: 1, duration: 0.2 });

                // Animate movement from previous to current mouse position
                tl.fromTo(
                    imageWrap,
                    { x: xDistance, y: yDistance - window.scrollY },
                    { x: xPosition, y: yPosition - window.scrollY, duration: 0.5 },
                    "<" // Start at same time as previous animation
                );

                // Fade out and shrink the image
                tl.to(imageWrap.find("img"), { opacity: 0, scale: 0.6, duration: 0.2 });
            }
        });
    });
</script>
</body>
</html>
