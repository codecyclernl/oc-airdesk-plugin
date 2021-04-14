$(document).ready(function() {

    class Application {
        constructor() {
            this.init();
        }

        init() {
            this.initVue();
        }

        initVue() {
            this.vm = new Vue({
                el: '#airdesk-app'
            });
        }
    };

    var application = new Application();

});
