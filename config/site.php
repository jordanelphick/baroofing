<?php

return [
    'name' => 'BA Roofing',
    'logo' => 'images/ba-roofing-logo.png',
    'tagline' => 'Reliable roofing across Newcastle & the Hunter',
    'phone' => '0400 000 000',
    'email' => 'hello@baroofing.com.au',
    'location' => 'Newcastle, NSW',

    'elphick' => [
        'consult_url' => 'https://elphickdigital.com.au/consult',
        'pricing_url' => 'https://elphickdigital.com.au/pricing',
    ],

    'nav' => [
        ['label' => 'Home', 'href' => '/'],
        ['label' => 'Services', 'href' => '#services'],
        ['label' => 'About', 'href' => '#about'],
        ['label' => 'Projects', 'href' => '#projects'],
        ['label' => 'Contact', 'href' => '#contact'],
    ],

    'services' => [
        [
            'title' => 'All Metal Roofing',
            'description' => 'Colorbond, corrugated, and standing seam installations finished to a high standard for homes and commercial properties.',
            'icon' => 'metal',
        ],
        [
            'title' => 'New Roofing & Re-roofing',
            'description' => 'Complete new roof systems and full replacements — planned carefully, installed efficiently, built to last.',
            'icon' => 'roof',
        ],
        [
            'title' => 'Repairs & Maintenance',
            'description' => 'Leak detection, storm damage, flashing repairs, and preventative maintenance to protect your investment.',
            'icon' => 'repair',
        ],
        [
            'title' => 'Guttering, Fascia & Downpipes',
            'description' => 'Supply and installation of gutters, fascia boards, and downpipes for proper drainage and a clean finish.',
            'icon' => 'gutter',
        ],
        [
            'title' => 'Skylight & Whirlybird Installations',
            'description' => 'Natural light and roof ventilation installed with watertight flashings and neat, professional detailing.',
            'icon' => 'skylight',
        ],
    ],

    'images' => [
        'hero' => 'images/hero-roof.png',
        'about' => 'images/projects/roof-2.png',
    ],

    'process' => [
        [
            'step' => '01',
            'title' => 'Tell us about your roof',
            'description' => 'Call, email, or send the form with photos if you have them. We listen first and ask the right questions.',
        ],
        [
            'step' => '02',
            'title' => 'Site visit & clear quote',
            'description' => 'We inspect the roof, discuss options, and provide a straightforward written quote — no hidden extras.',
        ],
        [
            'step' => '03',
            'title' => 'Book your job',
            'description' => 'Once you are happy to proceed, we schedule around weather and your timeline and confirm start dates.',
        ],
        [
            'step' => '04',
            'title' => 'Quality finish & tidy handover',
            'description' => 'Work is completed to standard, the site is left clean, and we walk you through what was done.',
        ],
    ],

    'service_areas' => [
        [
            'region' => 'Newcastle & surrounds',
            'suburbs' => [
                'Adamstown', 'Charlestown', 'Hamilton', 'Islington', 'Kotara',
                'Lambton', 'Merewether', 'New Lambton', 'Wallsend', 'Waratah',
            ],
        ],
        [
            'region' => 'Lake Macquarie',
            'suburbs' => [
                'Belmont', 'Cardiff', 'Charlestown', 'Eleebana', 'Speers Point',
                'Swansea', 'Toronto', 'Warners Bay', 'Windale',
            ],
        ],
        [
            'region' => 'Hunter Valley',
            'suburbs' => [
                'Cessnock', 'East Maitland', 'Kurri Kurri', 'Maitland', 'Rutherford',
                'Singleton', 'Thornton',
            ],
        ],
    ],

    'testimonials' => [
        [
            'quote' => 'Honest quote, turned up when they said they would, and the new Colorbond roof looks brilliant. Site was spotless when they finished.',
            'name' => 'Sarah M.',
            'location' => 'Merewether',
            'service' => 'Re-roofing',
        ],
        [
            'quote' => 'Had a leak after a storm — they found the issue quickly, explained it clearly, and fixed it the same week. Would recommend without hesitation.',
            'name' => 'David K.',
            'location' => 'Warners Bay',
            'service' => 'Roof repairs',
        ],
        [
            'quote' => 'From gutters to whirlybirds, everything was handled in one go. Good communication and fair pricing throughout.',
            'name' => 'Michelle T.',
            'location' => 'Maitland',
            'service' => 'Roofline & ventilation',
        ],
    ],

    'faqs' => [
        [
            'question' => 'Do you provide free quotes?',
            'answer' => 'Yes. We offer free quotes for roofing, re-roofing, repairs, and roofline work across Newcastle and the Hunter. After a site visit or photo review, you receive a clear written quote.',
        ],
        [
            'question' => 'How long does a re-roof usually take?',
            'answer' => 'Most residential re-roofs take between a few days and one week depending on roof size, access, weather, and scope. We confirm timelines before work begins.',
        ],
        [
            'question' => 'Are you licensed and insured?',
            'answer' => 'We work to industry standards with appropriate licensing and insurance in place. Safety and compliance are part of every job, from repairs through to full replacements.',
        ],
        [
            'question' => 'Can you help with storm or leak damage?',
            'answer' => 'Yes. We carry out leak detection, emergency make-safe work where required, and permanent repairs using quality flashings and metal roofing products suited to coastal conditions.',
        ],
        [
            'question' => 'What roofing materials do you install?',
            'answer' => 'We specialise in metal roofing including Colorbond and corrugated profiles, along with associated flashings, gutters, fascia, skylights, and ventilation products.',
        ],
        [
            'question' => 'Which areas do you service?',
            'answer' => 'We service Newcastle, Lake Macquarie, and the wider Hunter region including Maitland, Cessnock, and surrounding suburbs. Contact us if you are unsure — we are happy to advise.',
        ],
    ],

    'projects' => [
        [
            'title' => 'Metal re-roof with solar',
            'location' => 'Hunter region',
            'image' => 'images/projects/roof-1.png',
        ],
        [
            'title' => 'Skylight & roof ventilation',
            'location' => 'Newcastle',
            'image' => 'images/projects/roof-2.png',
        ],
        [
            'title' => 'Colorbond re-roof',
            'location' => 'Lake Macquarie',
            'image' => 'images/projects/roof-3.png',
        ],
        [
            'title' => 'Corrugated metal roofing',
            'location' => 'Hunter Valley',
            'image' => 'images/projects/roof-4.png',
        ],
    ],
];
