<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']		= 'Field {field} harus diisi';
$lang['form_validation_isset']			= 'Field {field} field must have a value';
$lang['form_validation_valid_email']		= 'Field {field} harus merupakan email yang valid';
$lang['form_validation_valid_emails']		= 'Field {field} field must contain all valid email addresses.';
$lang['form_validation_valid_url']		= 'Field {field} field must contain a valid URL';
$lang['form_validation_valid_ip']		= 'Field {field} field must contain a valid IP';
$lang['form_validation_valid_base64']		= 'Field {field} field must contain a valid Base64 string.';
$lang['form_validation_min_length']		= 'Field {field} field must be at least {param} characters in length.';
$lang['form_validation_max_length']		= 'Field {field} tidak bisa melebihi {param} karakter';
$lang['form_validation_exact_length']		= 'Field {field} field must be exactly {param} characters in length.';
$lang['form_validation_alpha']			= 'Field {field} field may only contain alphabetical characters.';
$lang['form_validation_alpha_numeric']		= 'Field {field} field may only contain alpha-numeric characters.';
$lang['form_validation_alpha_numeric_spaces']	= 'Field {field} field may only contain alpha-numeric characters and spaces.';
$lang['form_validation_alpha_dash']		= 'Field {field} field may only contain alpha-numeric characters, underscores, and dashes.';
$lang['form_validation_numeric']		= 'Field {field} harus berupa nomor.';
$lang['form_validation_is_numeric']		= 'Field {field} field must contain only numeric characters.';
$lang['form_validation_integer']		= 'Field {field} field must contain an integer.';
$lang['form_validation_regex_match']		= 'Field {field} field is not in Field correct format.';
$lang['form_validation_matches']		= 'Field {field} field does not match Field {param} field.';
$lang['form_validation_differs']		= 'Field {field} field must differ from Field {param} field.';
$lang['form_validation_is_unique'] 		= 'Field {field} field must contain a unique value.';
$lang['form_validation_is_natural']		= 'Field {field} field must only contain digits.';
$lang['form_validation_is_natural_no_zero']	= 'Field {field} field must only contain digits and must be greater than zero.';
$lang['form_validation_decimal']		= 'Field {field} field must contain a decimal number.';
$lang['form_validation_less_than']		= 'Field {field} field must contain a number less than {param}.';
$lang['form_validation_less_than_equal_to']	= 'Field {field} field must contain a number less than or equal to {param}.';
$lang['form_validation_greater_than']		= 'Field {field} field must contain a number greater than {param}.';
$lang['form_validation_greater_than_equal_to']	= 'Field {field} field must contain a number greater than or equal to {param}.';
$lang['form_validation_error_message_not_set']	= 'Unable to access an error message corresponding to your field name {field}.';
$lang['form_validation_in_list']		= 'Field {field} field must be one of: {param}.';
