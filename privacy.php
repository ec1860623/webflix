<?php

include ( 'logout.html' ) ;

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Check if admin.
if ($_SESSION[ 'role' ] == 'admin'){
	include ( 'admin_nav.html' ) ;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>About Us Section</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" href="terms.css">
</head>	
<body>	
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>Privacy Statement</h1>
				</div>
				<div class="content">
				
				    <div class="page-block">
    <div class="c-wrapper">
        <div>
            <p>This Privacy Statement explains our practices, including your choices, regarding the collection, use, and disclosure of certain information, including your personal information in connection with the Webflix service.</p>
            <h3>Contacting Us
            </h3>
            <p>If you have general questions about your account or how to contact customer service for assistance, please visit our online help center at . For questions specifically about this Privacy
                Statement, or our use of your personal information, cookies or similar technologies, please contact our Data Protection Officer/Privacy Office by email at .
            </p>
            <p>The data controller of your personal information is Webflix Services UK Limited</a>. Please note that if you contact us to assist you, for your safety and ours we may need to authenticate your
                identity before fulfilling your request.</p>
            <h3>Collection of Information
            </h3>
            <p>We receive and store information about you such as:
            </p>
            <ul>
                <li>
                    <p><strong>Information you provide to us:</strong> We collect information you provide to us which includes:
                    </p>
                    <ul>
                        <li>
                            <p>your name, email address, payment method(s), telephone number, and other identifiers you might use (such as an in-game name). We collect this information in a number of ways, including when you enter it while using our service,
                                interact with our customer service, or participate in surveys or marketing promotions;
                            </p>
                        </li>
                        <li>
                            <p>information when you choose to provide ratings, taste preferences, account settings (including preferences set in the "Account" section of our website), or otherwise provide information to us through our service or
                                elsewhere.
                            </p>
                        </li>
                    </ul>
                </li>
                <li>
                    <p><strong>Information we collect automatically:</strong> We collect information about you and your use of our service, your interactions with us and our advertising, as well as information regarding your network, network devices, and
                        your computer or other Webflix capable devices you might use to access our service (such as gaming systems, smart TVs, mobile devices, set top boxes, and other streaming media devices). This information includes: </p>
                    <ul>
                        <li>
                            <p>your activity on the Webflix service, such as title selections, shows you have watched, search queries, and activity in Webflix games;</p>
                        </li>
                        <li>
                            <p>your interactions with our emails and texts, and with our messages through push and online messaging channels;
                            </p>
                        </li>
                        <li>
                            <p>details of your interactions with our customer service, such as the date, time and reason for contacting us, transcripts of any chat conversations, and if you call us, your phone number and call recordings;
                            </p>
                        </li>
                        <li>
                            <p>device IDs or other unique identifiers, including for your network devices, and devices that are Webflix capable on your Wi-Fi network; </p>
                        </li>
                        <li>
                            <p>resettable device identifiers (also known as advertising identifiers), such as those on mobile devices, tablets, and streaming media devices that include such identifiers (see the "Cookies and Internet Advertising"
                                section below for more information);
                            </p>
                        </li>
                        <li>
                            <p>device and software characteristics (such as type and configuration), connection information including type (wifi, cellular), statistics on page views, referring source (for example, referral URLs), IP address (which may tell
                                us your general location), browser and standard web server log information;
                            </p>
                        </li>
                        <li>
                            <p>information collected via the use of cookies, web beacons and other technologies, including ad data (such as information on the availability and delivery of ads, the site URL, as well as the date and time). (See our "Cookies
                                and Internet Advertising" section for more details.)
                            </p>
                        </li>
                    </ul>
                </li>
                <li>
                    <p><strong>Information from partners:</strong> We collect information from other companies with whom you have a relationship (“Partners”). These Partners might include (depending on what services you use): your TV or internet service
                        provider, or other streaming media device providers who make our service available on their device; mobile phone carriers or other companies who provide services to you and collect payment for the Webflix service for distribution
                        to us or provide pre-paid promotions for the Webflix service; and voice assistant platform providers who enable interaction with our service through voice commands. The information Partners provide us varies depending on the nature
                        of the Partner services, and may include: </p>
                    <ul>
                        <li>
                            <p>search queries and commands applicable to Webflix that you make through Partner devices or voice assistant platforms; </p>
                        </li>
                        <li>
                            <p>service activation information such as your email address or other contact information;
                            </p>
                        </li>
                        <li>
                            <p>IP addresses, device IDs or other unique identifiers, as well as associated pre-paid promotion, billing and user interface information, that support user authentication, the Webflix service registration experience, Partner
                                payment processing, and the presentation of Webflix content to you through portions of the Partner user interface. </p>
                        </li>
                    </ul>
                </li>
                <li>
                    <p><strong>Information from other sources:</strong> We also obtain information from other sources. We protect this information according to the practices described in this Privacy Statement, plus any additional restrictions imposed by
                        the source of the data. These sources vary over time, but could include:
                    </p>
                    <ul>
                        <li>
                            <p>service providers that help us determine a location based on your IP address in order to customize our service and for other uses consistent with this Privacy Statement;
                            </p>
                        </li>
                        <li>
                            <p>security service providers who provide us with information to secure our systems, prevent fraud and help us protect the security of Webflix accounts;</p>
                        </li>
                        <li>
                            <p>payment service providers who provide us with payment or balance information, or updates to that information, based on their relationship with you;
                            </p>
                        </li>
                        <li>
                            <p>online and offline data providers, from which we obtain aggregated demographic, interest based and online advertising related data; </p>
                        </li>
                        <li>
                            <p>publicly-available sources such as publicly available posts on social media platforms and information available through public databases associating IP addresses with internet service providers (ISPs);</p>
                        </li>
                        <li>
                            <p>third party services that you are signed into and that provide functions within Webflix games, such as multiplayer gameplay, leaderboards, and game saving options.</p>
                        </li>
                    </ul>
                </li>
            </ul>
            <h3>Use of Information
            </h3>
            <p>We use information to provide, analyze, administer, enhance and personalize our services and marketing efforts, to manage member referrals, to process your registration, your orders and your payments, and to communicate with you on these and
                other topics. For example, we use such information to: </p>
            <ul>
                <li>
                    <p>determine your general geographic location, provide localized content, provide you with customized and personalized viewing recommendations for movies and TV shows we think will be of interest to you, determine your ISP to support
                        network troubleshooting for you (we also use aggregated ISP information for operational and business purposes), and help us quickly and efficiently respond to inquiries and requests; </p>
                </li>
                <li>
                    <p>coordinate with Partners on making the Webflix service available to members and providing information to non members about the availability of the Webflix service, based on the specific relationship you have with the Partner;
                    </p>
                </li>
                <li>
                    <p>secure our systems, prevent fraud and help us protect the security of Webflix accounts;</p>
                </li>
                <li>
                    <p>prevent, detect and investigate potentially prohibited or illegal activities, including fraud, and to enforce our terms (such as determining whether and for which Webflix signup offers you are eligible and determining whether a particular
                        device is permitted to use the account consistent with our Terms of Use);</p>
                </li>
                <li>
                    <p>analyze and understand our audience, improve our service (including our user interface experiences and service performance) and optimize content selection, recommendation algorithms and delivery;
                    </p>
                </li>
                <li>
                    <p>communicate with you concerning our service so that we can send you news about Webflix, details about new features and content available on Webflix, special offers, promotional announcements, consumer surveys, and to assist you with
                        operational requests such as password reset requests. These communications may be by various methods, such as email, push notifications, text message, online messaging channels, and matched identifier communications (described
                        below). Please see the "Your Choices" section of this Privacy Statement to learn how to set or change your communications preferences.
                    </p>
                </li>
            </ul>
            <p>Our recommendations system strives to predict what you will be in the mood to watch when you log in. However, our recommendations system does not infer or attach socio-demographic information (like gender or race) to you. We have a Help article
                that explains how our recommendations system works - spoilers: the biggest driver of recommendations is what you actually choose to watch through our service. You can read the article at www.Webflix.com/recommendations.</p>
            <p>Our legal basis for collecting and using the personal information described in this Privacy Statement will depend on the personal information concerned and the specific context in which we collect and use it. We will normally collect personal
                information from you where we need the personal information to perform a contract with you (for example, to provide our services to you), where the processing is in our legitimate interests and not overridden by your data protection interests
                or fundamental rights and freedoms (for example, our direct marketing activities in accordance with your preferences), or where we have your consent to do so (for example, for you to participate in certain consumer insights activities
                like specific surveys and focus groups). In some cases, we may also have a legal obligation to collect personal information from you or may otherwise need the personal information to protect your vital interests or those of another person
                (for example, to prevent payment fraud or confirm your identity). For questions about our use of your personal information (including legal bases and transfer mechanisms we rely on), cookies or similar technologies, please contact our
                Data Protection Officer/Privacy Office by email at . Please visit our online help center at for more information about
                these topics.
            </p>
            <h3>Disclosure of Information
            </h3>
            <p>We disclose your information for certain purposes and to third parties, as described below:
            </p>
            <ul>
                <li>
                    <p><strong>The Webflix family of companies:</strong> We share your information among the Webflix family of companies  as needed for: providing you
                        with access to our services; providing customer support; making decisions about service improvements; content development; and for other purposes described in the Use of Information section of this Privacy Statement.
                    </p>
                </li>
                <li>
                    <p><strong>Service Providers:</strong> We use other companies, agents or contractors ("Service Providers") to perform services on our behalf or to assist us with the provision of services to you. For example, we engage Service
                        Providers to provide marketing, advertising, communications, security, infrastructure and IT services, to customize, personalize and optimize our service, to provide bank account or balance information, to process credit card transactions
                        or other payment methods, to provide customer service, to analyze and enhance data (including data about users' interactions with our service), and to process and administer consumer surveys. In the course of providing such
                        services, these Service Providers may have access to your personal or other information. We do not authorize them to use or disclose your personal information except in connection with providing their services (which includes maintaining
                        and improving their services). </p>
                </li>
                <li>
                    <p><strong>Partners:</strong> As described above, you may have a relationship with one or more of our Partners, in which case we may share certain information with them in order to coordinate with them on providing the Webflix service
                        to members and providing information about the availability of the Webflix service. For example, depending on what Partner services you use, we may share information:
                    </p>
                    <ul>
                        <li>
                            <p>in order to facilitate Partner pre-paid promotions or collection of payment for the Webflix service for distribution to us; </p>
                        </li>
                        <li>
                            <p>with Partners who operate voice assistant platforms that allow you to interact with our service using voice commands;
                            </p>
                        </li>
                        <li>
                            <p>so that content and features available in the Webflix service can be suggested to you in the Partner’s user interface. For members, these suggestions are part of the Webflix service and may include customized and personalized
                                viewing recommendations.
                            </p>
                        </li>
                    </ul>
                </li>
                <li>
                    <p><strong>Promotional offers:</strong> We may offer joint promotions or programs that, in order for your participation, will require us to share your information with third parties. In fulfilling these types of promotions, we may share
                        your name and other information in connection with fulfilling the incentive. Please note that these third parties are responsible for their own privacy practices.
                    </p>
                </li>
                <li>
                    <p><strong>Protection of Webflix and others:</strong> Webflix and its Service Providers may disclose and otherwise use your personal and other information where we or they reasonably believe such disclosure is needed to (a) satisfy any
                        applicable law, regulation, legal process, or governmental request, (b) enforce applicable terms of use, including investigation of potential violations thereof, (c) detect, prevent, or otherwise address illegal or suspected illegal
                        activities (including payment fraud), security or technical issues, or (d) protect against harm to the rights, property or safety of Webflix, its users or the public, as required or permitted by law.
                    </p>
                </li>
                <li>
                    <p><strong>Business transfers:</strong> In connection with any reorganization, restructuring, merger or sale, or other transfer of assets, we will transfer information, including personal information, provided that the receiving party
                        agrees to respect your personal information in a manner that is consistent with our Privacy Statement.
                    </p>
                </li>
            </ul>
            <p>Whenever in the course of sharing information we transfer personal information to other countries, we will ensure that the information is transferred in accordance with this Privacy Statement and as permitted by the applicable laws on data
                protection.
            </p>
            <p>You may also choose to disclose your information in the following ways:
            </p>
            <ul>
                <li>
                    <p>certain portions of our service may contain a tool which gives you the option to share information by email, text message and social or other sharing applications, using the clients and applications on your smart device;
                    </p>
                </li>
                <li>
                    <p>social plugins and similar technologies allow you to share information, and</p>
                </li>
                <li>
                    <p>through Webflix game features, such as multiplayer options and leaderboards.
                    </p>
                </li>
            </ul>
            <p>Social plugins and social applications are operated by the social networks themselves, and are subject to their terms of use and privacy policies. Similarly, some of the Webflix game features mentioned above (such as multiplayer gameplay,
                leaderboards, and game saving options) may require use of a third-party service, which is subject to that service’s terms of use and privacy policy.
            </p>
            <h3>Access to Account and Profiles
            </h3>
            <ul>
                <li>
                    <p><strong>“Remember me” function:</strong> For ease of access to your account, you can use the "Remember me on this device" function when you log in to the website. This function uses technology that enables us to provide direct
                        account access and to help administer the Webflix service without requiring reentry of any password or other user identification when your browser revisits the service.&nbsp;</p>
                </li>
                <li>
                    <p><strong>Giving others access to your account:</strong> If you share or otherwise allow others to have access to your account, they will be able to see shows you have watched, ratings, account information (including your email address
                        or other information in the "Account" area of our website), and game related information (such as your in-game name and saved game progress). This remains true even if you use our profiles feature. You might have the
                        option to use seamless account login through the Webflix mobile app, which enables login to the Webflix app on smart TVs, set top boxes, and other streaming media devices on the Wi-Fi network to which you are connected. If you
                        use that feature, those devices will remain signed into your account unless you later log out of those devices.</p>
                </li>
                <li>
                    <p><strong>Profiles:</strong> Profiles allow users to have a distinct, personalized Webflix experience, built around the movies and shows of interest to them, as well as separate watch histories. Please note that profiles are available
                        to everyone who uses your Webflix account, so that anyone with access to your Webflix account can navigate to and use, edit or delete profiles. You should explain this to others with access to your account, and if you do not wish
                        them to use or change your profile, be sure to let them know. Profile users may be offered the opportunity to add an email address, phone number or other information to the profile and will be provided with notice of collection
                        and use at the time such information is requested (the Profile Privacy Notice applies . We have various parental controls available,
                        you can learn more by reading our Help article located at .</p>
                </li>
                <li>
                    <p><strong>Removing device access to your Webflix account:</strong> To remove access to your Webflix account from your devices, visit the "Account" section of our website, choose "Sign out of all devices," and follow
                        the instructions to deactivate your devices (note, deactivation may not occur immediately). Where possible, users of public or shared devices should log out at the completion of each visit. If you sell or return a computer or Webflix
                        ready device, you should log out and deactivate the device before doing so. If you do not maintain the security of your password or device, or fail to log out or deactivate your device, subsequent users may be able to access your
                        account, including your personal information.</p>
                </li>
            </ul>
            <h3>Your Choices
            </h3>
            <p><strong>Email and Text Messages.</strong> If you no longer want to receive certain communications from us via email or text message, simply access the "Communications Settings" option in the "Account" section of our website
                and uncheck those items to unsubscribe. Alternatively, click the "unsubscribe" link in the email or reply STOP (or as otherwise instructed) to the text message. Please note that you cannot unsubscribe from service-related correspondence
                from us, such as messages relating to your account transactions.
            </p>
            <p><strong>Push Notifications. </strong>You can choose to receive mobile push notifications from Webflix. On some device operating systems, you will be automatically enrolled in the notifications. If you subsequently decide you no longer wish
                to receive these notifications, you can use your mobile device's settings functionality to turn them off. We also offer push notifications on certain web browsers. If you agree to receive those notifications and subsequently decide
                you no longer wish to receive these notifications, you can use your browser’s settings to turn them off. </p>
            <p><strong>WhatsApp.</strong> If you have enabled WhatsApp messages in connection with your Webflix account or profile and no longer wish to receive them, you can use your WhatsApp app settings to block them.
            </p>
            <p><strong>Interest-Based Ads.</strong> Interest-based ads are online ads that are tailored to your likely interests based on your use of various apps and websites across the Internet. If you are using a browser, then cookies and web beacons
                can be used to collect information to help determine your likely interests. If you are using a mobile device, tablet, or streaming media device that includes a resettable device identifier, then that identifier can be used to help determine
                your likely interests. For your choices about interest-based ads from Webflix, please see the "Cookies and Internet Advertising" section (below).
            </p>
            <p><strong>Matched Identifier Communications.</strong> Some third party sites and apps allow us to reach our users with online promotions about our titles and services by sending a privacy protective identifier to the third party. A privacy protective
                identifier means we convert the original information (such as an email address or phone number) into a value to keep the original information from being revealed. The third party compares the privacy protective identifier to identifiers
                in its database and there will be a match only if you have used the same identifier (such as an email address) with Webflix and the third party. If there is a match, Webflix can then choose whether or not to send a given promotional communication
                to you on that third party site or app, and can optimize and better measure the effectiveness of online advertising. You can opt out in the “Marketing Communications” section of the “Account” section of our website.</p>
            <h3>Your Information and Rights
            </h3>
            <p>You can request access to your personal information, or correct or update out-of-date or inaccurate personal information we hold about you. You may also request that we delete personal information that we hold about you.</p>
            <p>When you visit the "Account" portion of our website, where you have the ability to access and update a broad range of information about your account, including your contact information, your Webflix payment information, and various
                related information about your account (such as the content you have viewed and rated). You must be signed in to access the "Account" section. </p>
            <p>If you are the account owner, to download a copy of your personal information go to: (you must be signed in to access the "Account"
                section), and follow the instructions. </p>
            <p>For other requests, or if you have a question regarding our privacy practices, please contact our Data Protection Officer/Privacy Office at . For more information about how to access
                your information, including our verification process, please reference this help article:&nbsp;. For information about deletion, removal and retention of information, please
                reference this help article: . We respond to all requests we receive from individuals wishing to exercise their data protection rights in accordance with applicable data
                protection laws. Please also see the "Your Choices" section of this Privacy Statement for additional choices regarding your information.
            </p>
            <p>You can object to processing of your personal information, ask us to restrict processing of your personal information or request portability of your personal information; if we have collected and process your personal information with your
                consent, then you can withdraw your consent at any time; withdrawing your consent will not affect the lawfulness of any processing we conducted prior to your withdrawal, nor will it affect processing of your personal information conducted
                in reliance on lawful processing grounds other than consent; you have the right to complain to a data protection authority about our collection and use of your personal information (for the UK, the office of the UK Information Commissioner).
                Please visit our online help center at for more information about these topics.
            </p>
            <p>We may retain information as required or permitted by applicable laws and regulations, including to honor your choices, for our billing or records purposes and to fulfill the purposes described in this Privacy Statement. We take reasonable
                measures to destroy or de-identify personal information in a secure manner when it is no longer required.
            </p>
            <h3>Security
            </h3>
            <p>We use reasonable administrative, logical, physical and managerial measures to safeguard your personal information against loss, theft and unauthorized access, use and modification. These measures are designed to provide a level of security
                appropriate to the risks of processing your personal information.
            </p>
            <h3>Other Websites, Platforms and Applications
            </h3>
            <p>The Webflix service may be provided through and/or utilize features (such as voice controls) operated by third party platforms, or contain links to sites operated by third parties whose policies regarding the handling of information may differ
                from ours. For example, you may be able to access the Webflix service through platforms such as gaming systems, smart TVs, mobile devices, set top boxes and a number of other Internet connected devices. These websites and platforms have
                separate and independent privacy or data policies, privacy statements, notices and terms of use, which we recommend you read carefully. In addition, you may encounter third party applications that interact with the Webflix service.
            </p>
            <h3>Children
            </h3>
            <p>You must be at least 18 years of age or older to subscribe to the Webflix service. Minors may only use the service with the involvement, supervision, and approval of a parent or legal guardian.
            </p>
            <h3>Changes to This Privacy Statement
            </h3>
            <p>We will update this Privacy Statement from time to time in response to changing legal, regulatory or operational requirements. We will provide notice of any such changes (including when they will take effect) in accordance with law. Your continued
                use of the Webflix service after any such updates take effect will constitute acknowledgement and (as applicable) acceptance of those changes. If you do not wish to acknowledge or accept any updates to this Privacy Statement, you may cancel
                your use of the Webflix service. To see when this Privacy Statement was last updated, please see the "Last Updated" section below.
            </p>
            <h3><span id="cookies">Cookies and Internet Advertising
</span></h3>
            <p>We and our Service Providers use cookies and other technologies (such as web beacons), as well as resettable device identifiers, for various reasons. We want you to be informed about our use of these technologies, so this section explains
                the types of technologies we use, what they do, and your choices regarding their use.&nbsp;</p>
            <p><strong>Cookies and similar technologies, web beacons, and resettable device identifiers</strong></p>
            <p>Cookies are small data files that are commonly stored on your device when you browse and use websites and online services. We use other technologies such as browser storage and plugins (e.g., HTML5, IndexedDB, and WebSQL). Like cookies, these
                other technologies may store small amounts of data on your device. Web beacons (also known as clear gifs or pixel tags) often work in conjunction with cookies. In many cases, declining cookies will impair the effectiveness of web beacons
                associated with those cookies.</p>
            <p>If you use the Webflix app on a mobile device, tablet, or streaming media device, we may collect a resettable device identifier from your device. Resettable device identifiers (also known as advertising identifiers) are similar to cookies
                and are found on many mobile devices and tablets (for example, the "Identifier for Advertisers" (or IDFA) on Apple iOS devices and the "Google Advertising ID" on Android devices), and certain streaming media devices.
                Like cookies, resettable device identifiers are used to make online advertising more relevant and for analytics and optimization purposes.&nbsp;&nbsp;&nbsp;</p>
            <p><strong>Why does Webflix use these technologies?</strong></p>
            <p>We use these types of technologies for various reasons, like making it easy to access our services by remembering you when you return; to provide, analyze, understand and enhance the use of our services; to enforce our terms, prevent fraud;
                to improve site performance, monitor visitor traffic and actions on our site; and to deliver and tailor our marketing or advertising, and to understand interactions with our emails, marketing, and online ads on third party sites.&nbsp;&nbsp;</p>
            <p>To help you better understand how we use cookies and resettable device identifiers, please see the information below:</p>
            <ul>
                <li>
                    <p><strong>Essential cookies:</strong> These cookies are strictly necessary to provide our website or online service. For example, we and our Service Providers may use these cookies to authenticate and identify our members when they use
                        our websites and applications so we can provide our service to them. They also help us to enforce our Terms of Use, prevent fraud and maintain the security of our service.&nbsp;</p>
                </li>
                <li>
                    <p><strong>Performance and functionality cookies:</strong> These cookies help us to customize and enhance your online experience with Webflix. For example, they help us to remember your preferences and prevent you from needing to re-enter
                        information you previously provided (for example, during member sign up). We also use these cookies to collect information (such as popular pages, conversion rates, viewing patterns, click-through and other information) about our
                        visitors' use of the Webflix service so that we can enhance and personalize our website and service and conduct market research. Deletion of these types of cookies may result in limited functionality of our service.&nbsp;</p>
                </li>
                <li>
                    <p><strong>Advertising cookies and resettable device identifiers:</strong> These cookies and resettable device identifiers use information about your use of this and other websites and apps, your response to ads and emails, and to deliver
                        ads that are more relevant to you and for analytics and optimization purposes. These types of ads are called "interest-based advertising." The advertising cookies associated with our service belong to our Service Providers.&nbsp;</p>
                </li>
            </ul>
            <p>In connection with our use of these technologies, some of the websites and apps where we advertise, as well as advertising technology companies that we use to purchase, deliver, optimize, and/or measure our advertisements (collectively “Advertising
                Partners”), may receive limited information from us as part of our campaign targeting, measurement, and optimization (e.g., steps completed in sign-up and site visit or app open/install information).</p>
            <p>Common uses of this type of information are to judge the effectiveness of and optimize ad campaigns, by allowing Advertising Partners to see when someone who saw an ad later signed up for our service.&nbsp;Another common use is to make sure we
                do not serve ads trying to get individuals to sign up for the Webflix service if they are already a Webflix user.&nbsp;&nbsp;</p>
            <p>Webflix uses contractual and technical measures designed to prevent Advertising Partners from accessing information regarding specific title selections you make, URLs you land on, or shows you have watched on our service. We do not share information
                about title selections or your shows you have watched on our service.&nbsp;&nbsp;</p>
            <p><strong>How can I exercise choice regarding these technologies?</strong>&nbsp;</p>
			
            <p>For more information about cookies set through our website, as well as other types of online tracking (including the collection of information by third parties about your online activities over time and across third-party websites or online
                services for online interest based advertising), and to exercise choices regarding them. At this time, we do not respond to web browser "do not track" signals.&nbsp;</p>
            <p><strong>To exercise choice regarding resettable device identifiers</strong></p>
            <p>To opt out of interest-based ads from Webflix in connection with a resettable device identifier on a mobile device, tablet, or streaming media devices, please configure the appropriate setting on your device (usually found under "privacy"
                or "ads" in your device's settings). You may still see Webflix ads on your device, but they will not be tailored to your likely interests.&nbsp;</p>
            <p><strong>To exercise choice using self-regulatory program resources</strong></p>
            <p>Webflix supports the following self-regulatory programs, which provide additional privacy choices for interest-based advertising:&nbsp;</p>
            <ul>
                <li>
                    <p>In Europe: European Interactive Digital Advertising Alliance (EDAA)&nbsp;</a></p>
                </li>
            </ul>
            <p><strong>To exercise choice regarding other technologies</strong></p>
            <p>There are a number of ways to exercise choice regarding technologies that are similar to cookies, such as browser storage and plugins (e.g., HTML5, IndexedDB, and WebSQL). For example, many popular browsers provide the ability to clear browser
                storage, commonly in the settings or preferences area; see your browser's help function or support area to learn more. Other technologies, such as Silverlight storage, may be cleared from within the application.&nbsp;</p>
            <p>To see the prior version of this document, please go to www.Webflix.com/privacyupdates.
            </p>
            <p>
            </p>
            <p>
            </p>
            <p>
            </p>
            <p></p>
        </div>
    </div>
</div>
					
					
				</div>
				
				
			</div>
			
		</div>
	</div>

	
</body>
</html>

