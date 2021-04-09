module.exports = {
    base: '/blog/',
    title: 'Nikori の Blog',
    head: [
        ['link', { rel: 'icon', href: '/img/favicon.ico' }]
    ],
    description: 'shuaipenge blog',
    themeConfig: {
        nav: [
            // 网站导航
            { text: '首页', link: '/' },
            { text: '面试', link: '/interview/' },
            { text: 'GitHub', link: 'https://github.com/nikori1990/' },
        ],
        sidebar: {
            // 显示侧边导航
            "/java/": [""],
            "/网络/": [""],
            "/数据结构与算法/": [""],
            "/数据库/": [""],
            "/框架/": [""]
        }
    }
}