<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function servicedash(Request $request)
    {
        return view('serviceview.servicedashboard');
    }


    public function castecertificate(Request $request)
    {
        return view('serviceview.castecertificate');
    }

    public function migrationcertificate(Request $request)
    {
        return view('serviceview.migrationcertificate');
    }
    
    public function duplicatecertificate(Request $request)
    {
        return view('serviceview.duplicatecertificate');
    }

    public function domicilecertificate(Request $request)
    {
        return view('serviceview.domicilecertificate');
    }

    public function locationcertificate(Request $request)
    {
        return view('serviceview.locationcertificate');
    }

    public function relationshipcertificate(Request $request)
    {
        return view('serviceview.relationshipcertificate');
    } 

    public function residencecertificate(Request $request)
    {
        return view('serviceview.residencecertificate');
    }

    public function marriagecertificate(Request $request)
    {
        return view('serviceview.marriagecertificate');
    } 

    public function minoritycertificate(Request $request)
    {
        return view('serviceview.minoritycertificate');
    } 


    /*Pranav*/

    public function ksebbilling(Request $request)
    {
        return view('serviceview.kseb_bill_payment_form');
    }
    public function ksebbillinghistory(Request $request)
    {
        return view('serviceview.kseb_billing_history_form');
    }
    public function ksebconsumptionhistory(Request $request)
    {
        return view('serviceview.kseb_consumption_history_form');
    }
    public function ksebmeterreading(Request $request)
    {
        return view('serviceview.kseb_meter_reading_form');
    }

    public function ksebpaymentdetails(Request $request)
    {
        return view('serviceview.kseb_payment_details_form');
    }
    public function ksebtransactionhistory(Request $request)
    {
        return view('serviceview.kseb_transaction_history_form');
    }
    public function ksebuserregistration(Request $request)
    {
        return view('serviceview.kseb_user_registration_form');
    }
    public function pensionersearch(Request $request)
    {
        return view('serviceview.sevana_pensioners_search_form_eng');
    }
 public function intercastemarriagecertificate(Request $request)
    {
        return view('serviceview.intercastmarriagecertificate');
    }
     public function edist_onetimeregistration(Request $request)
    {
        return view('serviceview.otr_form');
    }


     public function equivalencycertificate(Request $request)
    {
        return view('serviceview.equivalency_form');
    }
     public function identificationcertificate(Request $request)
    {
        return view('serviceview.identificationform');
    }
     public function nativitycertificate(Request $request)
    {
        return view('serviceview.nativity');
    }
    public function birthcertificate(Request $request)
    {
        return view('serviceview.birth_certificate');
    }
    public function incomecertificate(Request $request)
    {
        return view('serviceview.income');
    }
    public function communitycertificate(Request $request)
    {
        return view('serviceview.community_certificates');
    }
    public function dependencycertificate(Request $request)
    {
        return view('serviceview.dependency_certificates');
    }
    public function familymembershipcertificate(Request $request)
    {
        return view('serviceview.family_membership_certificates');
    }
    public function noncreamycertificate(Request $request)
    {
        return view('serviceview.non_creamy');
    }
    public function lifecertificate(Request $request)
    {
        return view('serviceview.life');
    }
    public function conversioncertificate(Request $request)
    {
        return view('serviceview.conversion_certificate');
    }

    public function destitutecertificate(Request $request)
    {
        return view('serviceview.destitute_certificate');
    }

    public function nrega(Request $request)
    {
        return view('serviceview.nrega');
    }

    public function landcertificate(Request $request)
    {
        return view('serviceview.land_certificate');
    }
     public function possessionnoncertificate(Request $request)
    {
        return view('serviceview.possession_non');
    }

     public function indiraawasyojanaappln(Request $request)
    {
        return view('serviceview.indira_awas_yojana_application');
    }

     public function nonremarriagecertificate(Request $request)
    {
        return view('serviceview.nonremarriagecertificate');
    }

     public function oneandsamecertificate(Request $request)
    {
        return view('serviceview.oneandsamecertificate');
    }
    
     public function widowwidowercertificate(Request $request)
    {
        return view('serviceview.widow_widower_certificate');
    }

     public function calicutuniversitychellan(Request $request)
    {
        return view('serviceview.calicut_university_chellan');
    }

      public function deathcertificate(Request $request)
    {
        return view('serviceview.death_certificate');
    }

      public function possessioncertificate(Request $request)
    {
        return view('serviceview.possession');
    }

      public function valuationcertificate(Request $request)
    {
        return view('serviceview.valuation_certificates');
    }   

    public function solvencycertificate(Request $request)
    {
        return view('serviceview.solvency');
    }
    public function soochikacertificate(Request $request)
    {
        return view('serviceview.soochika');
    }

    

}
