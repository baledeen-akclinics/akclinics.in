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

            matcher: function (params, data) {

                if ($.trim(params.term) === "") {
                    return data;
                }

                if (typeof data.text === "undefined") {
                    return null;
                }

                if (
                    data.text.toUpperCase().indexOf(params.term.toUpperCase()) === 0
                ) {
                    return data;
                }

                return null;
            }
        });

        procedure.on("select2:select", function (e) {
            hidden.val(e.params.data.id);
        });

        procedure.on("select2:clear", function () {
            hidden.val("");
        });

    }

    initProcedure();

});