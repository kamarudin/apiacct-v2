<?php

/**
 * Account Detail
 * Sirim Demo Account API
 *
 * The version of the OpenAPI document: 1.0
 * Contact: ksamsudi@redhat.com
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Account;

class GetAccountController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation getAccountsNric
     *
     * Your GET endpoint.
     *
     * @param string $nric Person NRIC (required)
     *
     * @return Http response
     */
    public function getAccountsNric($nric)
    {
        $input = Request::all();

        if (Account::where('acct_nric', $nric)->exists()) {
            $account = Account::where('acct_nric', $nric)->get()->toJson(JSON_PRETTY_PRINT);
            return response($account, 200);
          } else {
            return response()->json([
              "message" => "Account not found"
            ], 404);
          }

        return response('How about implementing getAccountsNric as a get method ?');
    }
}