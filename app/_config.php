<?php

\SilverStripe\View\Requirements::set_force_js_to_bottom(true);

$formats = [
	[
		'title' => 'Text Formats',
		'items' => [
			[
				'title'             => 'Primary',
				'selector'          => 'p,h1,h2,h3,h4,h5,h6,span,strong,div',
				'classes'           => 'primary',
				'wrapper'           => false,
				'merge_siblings'    => false
			],
			[
				'title'             => 'Secondary',
				'selector'          => 'p,h1,h2,h3,h4,h5,h6,span,strong,div',
				'classes'           => 'secondary',
				'wrapper'           => false,
				'merge_siblings'    => false
			],
			[
				'title'             => 'Third',
				'selector'          => 'p,h1,h2,h3,h4,h5,h6,span,strong,div',
				'classes'           => 'third',
				'wrapper'           => false,
				'merge_siblings'    => false
			],
			[
				'title'             => 'Button',
				'selector'          => 'a,span',
				'classes'           => 'btn',
				'wrapper'           => false,
				'merge_siblings'    => false
			],
			[
				'title'             => 'Ghost Button',
				'selector'          => 'a,span',
				'classes'           => 'btn ghost',
				'wrapper'           => false,
				'merge_siblings'    => false
			]
		]
	],
	[
		'title' => 'Alignment',
		'items' => [
			[
				'title'             => 'Float Left',
				'selector'          => 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,i,span',
				'classes'           => 'left',
				'wrapper'           => false,
				'merge_siblings'    => false
			],
			[
				'title'             => 'Float Right',
				'selector'          => 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,i,span',
				'classes'           => 'right',
				'wrapper'           => false,
				'merge_siblings'    => false
			],
			[
				'title'             => 'Clear Fix for Floats',
				'selector'          => 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,i,span',
				'classes'           => 'clearfix',
				'wrapper'           => false,
				'merge_siblings'    => false
			],
			[
				'title'             => 'Flex Center',
				'selector'          => 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,i,span',
				'classes'           => 'flex-center',
				'wrapper'           => false,
				'merge_siblings'    => false
			]
		]
	]
];

$colors = [
	"00463A", "Green",
	"8A723B", "Gold",
	"FFFDF3", "Beige"
];

\SilverStripe\Forms\HTMLEditor\HTMLEditorConfig::get('cms')->setOptions([
	'verify_html' => false,
	'paste_plaintext_inform' => false,
	'style_formats' => $formats,
	'style_formats_autohide' => true,
	'style_formats_merge' => true,
	'extended_valid_elements' => '+i[class|id|style],details[class|id|style],summary[class|id|style]',
	'importcss_append' => false,
	'block_formats' => 'Paragraph=p;Heading 1=h1;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Div=div;Preformatted=pre;Block Quote=blockquote;',
	'color_map' => $colors
])
->disablePlugins('importcss')
->insertButtonsAfter('blocks', '| formats | styles | forecolor | backcolor');
