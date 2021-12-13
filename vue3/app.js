const app = {
    data () {
        return {
            name: 'Albert',
            lastName: 'Cruz',
            product: {
                title: 'Filme 01',
                description: 'Filme muito legal',
                image: './assets/images/filme01.jpg',
            },
            product2: {
                title: 'Filme 02',
                description: 'Filme muito legal (2)',
                image: './assets/images/filme02.jpg',
            }
        }
    }
}

Vue.createApp(app).mount('#app')