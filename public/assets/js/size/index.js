let men = new Vue({
    el: '#men',
    data: {
        mens: [{ 
            size_type: '',
            from_cm: '',
            to_cm: '',
            chest: '',
            waist: '',
            hip: '',
            length: '',
        }
    ]
    },
    mounted: function() {
        this.initEditValues()
    },
    methods: {
        initEditValues: function () {
            if ($('#male').length > 0) {
                let data = JSON.parse($('#male').text());
                this.mens = data;
            }
        },
        addForm() {
            this.mens.push({ 
                size_type: '',
                from_cm: '',
                to_cm: '',
                chest: '',
                waist: '',
                hip: '',
                length: '',
            });
        }
    }
});
let women = new Vue({
    el: '#women',
    data: {
        men: [{ 
            size_type: '',
            from_cm: '',
            to_cm: '',
            chest: '',
            waist: '',
            hip: '',
            length: '',
        }
    ]
    },
    mounted: function() {
        this.initEditValues()
    },
    methods: {
        initEditValues: function () {
            if ($('#female').length > 0) {
                let data = JSON.parse($('#female').text());
                this.mens = data;
            }
        },
        addForm() {
            this.mens.push({ 
                size_type: '',
                from_cm: '',
                to_cm: '',
                chest: '',
                waist: '',
                hip: '',
                length: '',
            });
        }
    }
});
let unisex = new Vue({
    el: '#unisex',
    data: {
        mens: [{ 
            size_type: '',
            from_cm: '',
            to_cm: '',
            chest: '',
            waist: '',
            hip: '',
            length: '',
        }
    ]
    },
    mounted: function() {
        this.initEditValues()
    },
    methods: {
        initEditValues: function () {
            if ($('#unisex').length > 0) {
                let data = JSON.parse($('#unisex').text());
                this.mens = data;
            }
        },
        addForm() {
            this.mens.push({ 
                size_type: '',
                from_cm: '',
                to_cm: '',
                chest: '',
                waist: '',
                hip: '',
                length: '',
            });
        }
    }
});