/**
 * The form attribute can be used to associate a submit button with a form, even
 * if the button is not a child of the <form> itself.
 *
 * This polyfill detects support with Modernizr and polyfills the functionality
 * using jQuery.
 */

(function() {
    // Via Modernizr
    function formAttributeSupport() {
        var form = document.createElement( "form" ),
            input = document.createElement( "input" ),
            div = document.createElement( "div" ),
            id = "formtest"+ ( new Date().getTime() ),
            attr,
            bool = false;

            form.id = id;

        // IE6/7 confuses the form idl attribute and the form content attribute
        if ( document.createAttribute ) {
            attr = document.createAttribute("form");
            attr.nodeValue = id;
            input.setAttributeNode(attr);
            div.appendChild(form);
            div.appendChild(input);

            document.documentElement.appendChild(div);

            bool = form.elements.length === 1 && input.form == form;

            div.parentNode.removeChild(div);
        }

        return bool;
    };

    if ( !formAttributeSupport() ) {
        $( document )
            .on( "click", "[form]", function( event ) {
                event.preventDefault();
                var formId = $( this ).attr( "form" ),
                $form = $( "#" + formId ).submit();
            });
    }
}());