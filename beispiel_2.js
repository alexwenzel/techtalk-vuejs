const app = new Vue({
    el: '#app',
    data: {
        items: [],
        page: 1
    },
    created: function () {
        const self = this
        axios.get('/silex/beispiel-2')
            .then(function (response) {
                self.items = response.data
            });
    },
    methods: {
        paged: function () {
            return this.items.slice(0, this.page * 12)
        },
        click: function () {
            this.page += 1
        }
    }
})