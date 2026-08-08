document.addEventListener("DOMContentLoaded", function () {

    // Wait until jQuery loads
    function initProcedure() {

        if (typeof jQuery === "undefined") {
       
            setTimeout(initProcedure, 100);
            return;
        }

        if (typeof $.fn.select2 === "undefined") {
       
            return;
        }

       

        const procedure = $("#procedure");
        const hidden = $("#procedure_id");
        const hiddenName = $("#procedure_name");

        if (!procedure.length) {
           
            return;
        }

        procedure.select2({
            placeholder: "Procedure*",
            allowClear: true,
            width: "100%",

            ajax: {
                url: API_BASE_URL + "/procedure-categories",
                type: "GET",
                dataType: "json",
                delay: 300,

                data: function (params) {
                    return {
                        q: params.term || ""
                    };
                },

                processResults: function (response) {

                    let results = [];

                    if (
                        response.status &&
                        response.data &&
                        response.data.procedure_categories
                    ) {

                        $.each(response.data.procedure_categories, function (i, item) {

                            results.push({
                                id: item.id,
                                text: item.name
                            });

                        });

                    }

                    return {
                        results: results
                    };
                },

                cache: true
            },

            minimumInputLength: 0
        });

        procedure.on("select2:select", function (e) {
            if (hidden.length) {
                hidden.val(e.params.data.id);
            }
            // Required by ContactController / BookAppointmentController validation
            if (hiddenName.length) {
                hiddenName.val(e.params.data.text);
            }
        });

        procedure.on("select2:clear", function () {
            if (hidden.length) {
                hidden.val("");
            }
            if (hiddenName.length) {
                hiddenName.val("");
            }
        });

    }

    initProcedure();

});