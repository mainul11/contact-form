;(function($) {
'use strict';

Vue.component('field-name', {
    template: '#tmpl-wpuf-field-name',

    mixins: [
        wpuf_mixins.option_field_mixin
    ],

    computed: {
        value: {
            get: function () {
                return this.editing_form_field[this.option_field.name];
            },

            set: function (value) {
                this.update_value(this.option_field.name, value);
            }
        }
    },

    methods: {
        on_focusout: function (e) {
            wpuf_form_builder.event_hub.$emit('field-text-focusout', e, this);
        },
        on_keyup: function (e) {
            wpuf_form_builder.event_hub.$emit('field-text-keyup', e, this);
        }
    }
});

/**
 * Field template: First Name
 */
Vue.component('form-name_field', {
    template: '#tmpl-wpuf-form-name_field',

    mixins: [
        wpuf_mixins.form_field_mixin
    ]
});

})(jQuery);
