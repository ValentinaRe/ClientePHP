/**
 * Created by Kal-El on 11-05-2016.
 */
$(document).ready(function() {
    $('#ClientePhp.php').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            textoBusqueda: {
                validators: {
                    notEmpty: {
                        message: 'El texto es requerido'
                    }
                }
            }
        }
    });
});