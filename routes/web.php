<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

// PLATEAU ROUTE GROUP
Route::group(['prefix' => 'plateau'], function() {

  Route::get('/history', function () {
    return view('plateau.history');
  })->name('history');

  Route::get('/the-people', function () {
    return view('plateau.people');
  })->name('people');

  Route::get('/at-a-glance', function () {
    return view('plateau.glance');
  })->name('glance');

  Route::get('/endowments', function () {
    return view('plateau.endowment');
  })->name('endowment');

  Route::get('/past-administrators', function () {
    return view('plateau.pastAdmins');
  })->name('past-admins');
  
});

// GOVERNMENT ROUTE GROUP
Route::group(['prefix' => 'government'], function() {
  
  Route::get('/the-governor', function () {
    return view('government.governor');
  })->name('governor');

  Route::get('/the-deputy-governor', function () {
    return view('government.deputy');
  })->name('deputy-governor');

  Route::get('/the-executive', function () {
    return view('government.executive');
  })->name('executive');

  Route::get('/the-secretary-to-the-state-gov', function () {
    return view('government.secretary');
  })->name('secretary');

  Route::get('/the-chief-of-staff', function () {
    return view('government.chiefofstaff');
  })->name('chiefofstaff');

  Route::get('/the-judiciary', function () {
    return view('government.judiciary');
  })->name('judiciary');

  // LGAs Route GROUP
  Route::group(['prefix' => 'lga'], function() {
    Route::get('/bassa', function() {
      return view('government.lga.bassa');
    })->name('bassa');

    Route::get('/barkin-ladi', function() {
      return view('government.lga.barkinladi');
    })->name('barkinladi');

    Route::get('/bokkos', function() {
      return view('government.lga.bokkos');
    })->name('bokkos');

    Route::get('/jos-east', function() {
      return view('government.lga.joseast');
    })->name('joseast');

    Route::get('/jos-north', function() {
      return view('government.lga.josnorth');
    })->name('josnorth');

    Route::get('/jos-south', function() {
      return view('government.lga.jossouth');
    })->name('jossouth');

    Route::get('/kanam', function() {
      return view('government.lga.kanam');
    })->name('kanam');

    Route::get('/kanke', function() {
      return view('government.lga.kanke');
    })->name('kanke');

    Route::get('/langtang-north', function() {
      return view('government.lga.langtangnorth');
    })->name('langtangnorth');

    Route::get('/langtang-south', function() {
      return view('government.lga.langtangsouth');
    })->name('langtangsouth');

    Route::get('/mangu', function() {
      return view('government.lga.mangu');
    })->name('mangu');

    Route::get('/mikang', function() {
      return view('government.lga.mikang');
    })->name('mikang');

    Route::get('/pankshin', function() {
      return view('government.lga.pankshin');
    })->name('pankshin');

    Route::get('/quaan-pan', function() {
      return view('government.lga.quaanpan');
    })->name('quaanpan');

    Route::get('/riyom', function() {
      return view('government.lga.riyom');
    })->name('riyom');

    Route::get('/shendam', function() {
      return view('government.lga.shendam');
    })->name('shendam');

    Route::get('/wase', function() {
      return view('government.lga.wase');
    })->name('wase');

  });
});

// COMMERCE ROUTE GROUP
Route::group(['prefix' => 'commerce'], function() {
  
  Route::get('/trade-and-investment', function () {
    return view('commerce.investment');
  })->name('investment');

  Route::get('/doing-business-in-plateau', function() {
    return view('commerce.business');
  })->name('business');

  Route::get('/tax-and-taxation', function() {
    return view('commerce.tax');
  })->name('taxation');

  Route::get('/natural-resources', function() {
    return view('commerce.naturalresources');
  })->name('resources');
});

// PROJECTS ROUTE GROUP
Route::group(['prefix' => 'projects'], function() {

  Route::get('/assisted-projects', function() {
    return view('projects.donorproject');
  })->name('donor.project');

  Route::get('completed-projects', function() {
    return view('projects.completed');
  })->name('completed.project');

  Route::get('on-going-projects', function() {
    return view('projects.ongoing');
  })->name('ongoing.project');

  Route::get('/planned-project', function() {
    return view('projects.planned');
  })->name('planned.project');
  
});

// MINISTRIES ROUTE GROUP
Route::group(['prefix' => 'ministries'], function() {

  Route::get('min-commerce-&-industries', function() {
    return view('mda.ministries.commerceindustry');
  })->name('commerce.industry');

  Route::get('/ministry-of-environment', function() {
    return view('mda.ministries.environment');
  })->name('min.environment');

  Route::Get('/ministry-of-health', function() {
    return view('mda.ministries.health');
  })->name('health');

  Route::get('/ministry-of-information', function() {
    return view('mda.ministries.information');
  })->name('min.information');

  Route::get('/mineral-development', function() {
    return view('mda.ministries.mineral');
  })->name('mineral.development');

  Route::get('/min-of-science-tech', function() {
    return view('mda.ministries.sciencetech');
  })->name('min.science');

  Route::get('/min-tourism-&-culture', function() {
    return view('mda.ministries.tourism');
  })->name('min.tourism');

  Route::get('/min-of-water-resources', function() {
    return view('mda.ministries.water');
  })->name('min.water');

  Route::get('/min-of-works', function() {
    return view('mda.ministries.works');
  })->name('min.works');

  Route::get('/min-housing-and-urban-dev', function() {
    return view('mda.ministries.housing');
  })->name('min.housing');
  
  Route::get('/min-of-youth-development', function() {
    return view('mda.ministries.youth');
  })->name('min.youth');
});

// DEPARTMENTS ROUTE
Route::group(['prefix' => 'departments'], function() {

  Route::get('/office-of-the-auditor-general', function() {
    return view('mda.departments.auditor');
  })->name('departments.auditor');

  Route::get('/plateau-printing-press', function() {
    return view('mda.departments.printing');
  })->name('departments.printing');

  Route::get('/plateau-agric-mech-services-corp', function() {
    return view('mda.departments.agricmechanic');
  })->name('departments.agricmechanic');  

  Route::get('/min-of-mineral-development', function() {
    return view('mda.departments.mineraldev');
  })->name('departments.mineraldev');   

  Route::get('/plateau-state-afforestation-programme', function() {
    return view('mda.departments.afforestation');
  })->name('departments.afforestation');
});

// AGENCIES ROUTE
Route::group(['prefix' => 'agencies'], function() {

  Route::get('/adult-and-non-formal-education-directorate', function() {
    return view('mda.agencies.adulteducation');
  })->name('agencies.adulteducation');

  Route::get('/adult-and-non-formal-education-directorate', function() {
    return view('mda.agencies.adulteducation');
  })->name('agencies.adulteducation');

  Route::get('/plateau-radio-television-corporation', function() {
    return view('mda.agencies.prtv');
  })->name('agencies.prtv');

  Route::get('/plateau-state-water-and-sanitation-agency', function() {
    return view('mda.agencies.sanitation');
  })->name('agencies.sanitation');

  Route::get('/state-emergency-management-agency', function() {
    return view('mda.agencies.emergency');
  })->name('agencies.emergency');

  Route::get('/plateau-environmental-protection-and-sanitation-agency', function() {
    return view('mda.agencies.pepsa');
  })->name('agencies.pepsa');

  Route::get('/min-tourism-&-culture', function() {
    return view('mda.agencies.tourism');
  })->name('agencies.tourism');

  Route::get('/plateau-state-community-and-social-development-agency', function() {
    return view('mda.agencies.socialdev');
  })->name('agencies.socialdev');

});

// BOARD ROUTE GROUP
Route::group(['prefix' => 'boards'], function() {
  Route::get('/plateau-state-water-board', function() {
    return view('mda.boards.waterboard');
  })->name('boards.waterboard');

  Route::get('/plateau-state-internal-revenue-service', function() {
    return view('mda.boards.psirs');
  })->name('boards.psirs');

  Route::get('muslim-pilgrim-welfare-board', function() {
    return view('mda.boards.muslimpilgrim');
  })->name('boards.muslimpilgrim');

  Route::get('plateau-local-gov-staff-pension-board', function() {
    return view('mda.boards.penshion');
  })->name('boards.pension');


});

// COMMISSION GROUP
Route::group(['prefix' => 'commissions'], function() {
  
  Route::get('/plateau-boundary-commission', function() {
    return view('mda.commission.boundary');
  })->name('commission.boundary');

  Route::get('civil-service-commission', function() {
    return view('mda.commission.civilservice');
  })->name('commission.civilservice');

  Route::get('plateau-state-independent-electoral-commission', function() {
    return view('mda.commission.plasiec');
  })->name('commission.plasiec');

  Route::get('plateau-state-teachers-council', function() {
    return view('mda.commission.teachers');
  })->name('commission.teachers');
});

// OTHERS GROUP
Route::group(['prefix' => 'others'], function() {
  
  Route::get('/plateau-state-specialist-hospital', function() {
    return view('mda.others.pssh');
  })->name('others.pssh');

  Route::get('plateau-united-football-club', function() {
    return view('mda.others.plateaufc');
  })->name('others.plateaufc');
});