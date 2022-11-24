<?php

const RULE_REQUIRED  = 'required';
const RULE_EMAIL     = 'email';
const RULE_MIN       = 'min';
const RULE_MAX       = 'max';
const RULE_MATCH     = 'match';
const RULE_UNIQUE     = 'unique';
const RULE_CHECK     = 'check';

const STATUS_INACTIVE   = 0;
const STATUS_ACTIVE     = 1;
const STATUS_DELETE     = 2;

const STATUS_PUBLISHED  = 'PUBLISHED';
const STATUS_DRAFT      = 'DRAFT';
const STATUS_PENDING    = 'PENDING';

const errorMessage = [
    RULE_REQUIRED   => 'This field is required',
    RULE_EMAIL      => 'This field must be valid email address',
    RULE_MIN        => 'Min length of this field must be {min}',
    RULE_MAX        => 'Max length of this field must be {max}',
    RULE_MATCH      => 'This field must be same as {match}',
    RULE_UNIQUE      => 'Record with this {field} are ready exist',
    RULE_CHECK      => 'Please check this box if you want to proceed'
];



/**
 * ERROR HANDLING
 * CSS constants :: Error Messages
 */
const GW_PRIMARY    = 'primary';
const GW_SUCCESS    = 'success';
const GW_DANGER     = 'danger';
const GW_WARNING    = 'warning';
const GW_INFO       = 'info';
/**
 * ICON FOR ERROR
 */
const I_primary     = '#exclamation-triangle-fill';
const I_success     = '#check-circle-fill';
const I_danger      = '#exclamation-triangle-fill';
const I_warning     = '#exclamation-triangle-fill';
const I_info        = '#info-fill';


/**
 * GWError :: Displays released errors :: Front
 * @param $ErrMsg
 * @param $ErrNo
 * @param null $ErrDie
 */
function GWError($ErrMsg, $ErrNo, $ErrDie = null): void
{
    $CssClass = ($ErrNo == E_USER_NOTICE ? GW_INFO : ($ErrNo == E_USER_WARNING ? GW_WARNING : ($ErrNo == E_USER_ERROR ? GW_DANGER : $ErrNo)));
    $icon = ($ErrNo == E_USER_NOTICE ? I_info : ($ErrNo == E_USER_WARNING ? I_warning : ($ErrNo == E_USER_ERROR ? '#exclamation-triangle-fill' : $ErrNo)));
    $label = ucfirst($CssClass);

    echo "
    <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
      <symbol id='check-circle-fill' fill='currentColor' viewBox='0 0 16 16'>
        <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
      </symbol>
      <symbol id='info-fill' fill='currentColor' viewBox='0 0 16 16'>
        <path d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z'/>
      </symbol>
      <symbol id='exclamation-triangle-fill' fill='currentColor' viewBox='0 0 16 16'>
        <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
      </symbol>
    </svg>
    <div class='alert alert-{$CssClass} d-flex align-items-center'>
        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='{$label}:'>
            <use xlink:href='#exclamation-triangle-fill'/>
        </svg>
        <div>
            {$ErrMsg}
        </div>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>close</button>     
    </div>
    ";



    if ($ErrDie):
        die;
    endif;
}





