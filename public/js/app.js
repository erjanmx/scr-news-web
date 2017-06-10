var router = new VueRouter({
    mode: 'history',
    routes: []
});

Vue.component('modal', {
    template: '#modal-template'
});

var app = new Vue({
    el: '#app',
    router,
    data: {
        q: '',  // query
        ns: '',
        ft: '', // first timestamp
        lt: '', // last timestamp
        news: [], 
        loading: false,
        showModal: false,
        loading_more: false
    },

    filters: {
        moment: function (timestamp) {
            return moment.unix(timestamp).fromNow();
        },

        icon: function (source) {
            return 'https://www.google.com/s2/favicons?domain=' + source;
        }
    },

    methods: {
        loadData: function () {
            this.loading = true;
            axios.get('/news', {
                params: {
                    q: this.q
                }
            }).then(response => {
                this.news = response.data;

                if (this.news.length) {
                    this.ft = this.news[0].timestamp;
                    this.lt = this.news[this.news.length - 1].timestamp;
                } else {
                    this.ft = 0;
                    this.lt = 0;
                }
                this.ns = '';
                this.loading = false;
            });
        },

        loadMore: function () {
            if (this.loading_more) {
                return;
            }
            
            this.loading_more = true;
            axios.get('/news', {
                params: {
                    q: this.q,
                    lt: this.lt,
                }
            }).then(response => {
                var news = response.data;
                this.news = this.news.concat(news);
        
                if (news.length) {
                    this.lt = news[news.length - 1].timestamp;
                } else {
                    this.lt = 0;
                }
                this.loading_more = false;
            });
        },
        
        getCount: function () {
            axios.get('/ct/' + this.ft, {
                params: {
                    q: this.q
                }
            }).then(
                response => this.ns = response.data
            )
        },

        refresh: function () {
            this.loadData()
        }
    },
    mounted() {
        this.q = this.$route.query.q;
        if (typeof(this.q) == 'undefined') {
            this.q = '';
        }
        this.loadData();

        setInterval(function () {
            this.getCount();
        }.bind(this), 15000);

    }
});
