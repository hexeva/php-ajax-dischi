Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        albums: []
    },
    methods: {
        getAlbumApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/milestone-2/server.php')
            .then((response) => {
                this.albums = response.data;
                console.log(this.albums);
            });
        }
    },
    created: function() {
        this.getAlbumApi();
    }
});