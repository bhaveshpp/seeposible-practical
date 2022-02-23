define(['jquery', 'uiComponent', 'ko', 'mage/url'], function ($, Component, ko, url) {
    'use strict';
    return Component.extend({
        defaults: {
            template: 'Seepossible_Custom/knockout-newsletter'
        },
        initialize: function () {
            this.customerEmail = ko.observable('');
            this.messageText = ko.observable();
            this.messageType = ko.observable();
            this._super();
        },
        Subscribe: function () {
            // console.log(this.customerEmail());
            var self = this;
            $.ajax({
                url: url.build("newsletter/subscriber/new"),
                data: {
                    email: this.customerEmail()
                },
                type: "POST",
                dataType: 'json',
                beforeSend: function () {
                    $('body').trigger('processStart'); // start loader
                }       
            }).done(function (data) {
                
                if (data) {
                    if (data.success) {
                        self.messageType("success");
                        self.messageText(data.message);
                    }else{
                        self.messageType("error");
                        if (data.message) {
                            self.messageText(data.message)
                        }else{
                            self.messageText('error');
                        }
                    }
                }
                $('body').trigger('processStop');
            });
            
            this.customerEmail('');
        }
    });
}
);
