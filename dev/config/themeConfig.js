'use strict';

module.exports = {
	theme: {
		slug: 'ceylonblog',
		name: 'CeylonBlog',
		author: 'Dasun Edirisinghe'
	},
	dev: {
		browserSync: {
			live: true,
			proxyURL: 'ceylonblog.dev',
			bypassPort: '3001'
		},
		browserslist: [ // See https://github.com/browserslist/browserslist
			'> 1%',
			'last 2 versions'
		],
		debug: {
			styles: false, // Render verbose CSS for debugging.
			scripts: false // Render verbose JS for debugging.
		}
	},
	export: {
		compress: true
	}
};
