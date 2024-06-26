<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MarketedProject;
use App\Models\Project;
use App\Models\ProjectMarketing;
use DB;
use Illuminate\Http\Request;

class MarketingController extends Controller
{ /*
$results = DB::table('projects')
->orderByRaw('
CASE
WHEN order = 0 THEN 1
ELSE 0
END,
view_count DESC
')
->get(); ====>> sıralama kodu anasayfa için
*/
    public function marketing()
    {
        $projects = Project::whereNotIn('id', function ($query) {
            $query->select('project_id')->from('marketed_projects');
        })->get();
        $avaliableMarketings = ProjectMarketing::whereNotIn('sort_order', function ($query) {
            $query->select('sort_order')->from('marketed_projects');
        })->get();
        $marketings = ProjectMarketing::all();
        $marketings = ProjectMarketing::query()
            ->leftJoin('marketed_projects', 'marketed_projects.sort_order', '=', 'projects_marketing.sort_order')
            ->select(
                DB::raw('
            projects_marketing.sort_order,
            projects_marketing.price,
            COALESCE(marketed_projects.sort_order, 0) as "status"')
            )->get();

        return view('admin.marketing.index', compact('marketings', 'avaliableMarketings', 'projects'));
    }
    public function market(Request $req)
    {
        $postData = $req->validate([
            'project_id' => 'required|integer',
            //veritabanında veri var mı kontrolü eklenecek
            'sort_order' => 'required|integer',
            'months' => 'required|integer'
        ]);
        $month = $postData['months'];
        $date_end = date('Y-m-d', strtotime('+' . $month . ' months'));
        $date_start = date('Y-m-d');

        MarketedProject::create([
            'project_id' => $postData['project_id'],
            'sort_order' => $postData['sort_order'],
            'date_start' => $date_start,
            'date_end' => $date_end
        ]);
        return redirect()->route('admin.marketing.projects.index')->with('success', 'Project marketed succesfully');
    }
    public function storeMarketing(Request $request)
    {
        $this->validate($request, [
            'sort_order' => 'required',
            'price' => 'required|integer',
        ]);
        $projectsMarketing = ProjectMarketing::where('sort_order', $request->get('sort_order'))->first();
        if ($projectsMarketing) {
            $projectsMarketing->price = $request->get('price');
            $projectsMarketing->save();
        } else {
            ProjectMarketing::create([
                'sort_order' => $request->get('sort_order'),
                'price' => $request->get('price'),
            ]);
        }
        return redirect()->route('admin.marketing.projects.index')->with('success', 'Marketing created successfully');
    }
    public function updateMarketing(Request $request)
    {
        $postData = $request->validate(([
            'sort_order' => 'required|integer',
            'price' => 'required|integer'
        ]));
        $marketing = ProjectMarketing::where('sort_order', $postData['sort_order']);
        $marketing->update($postData);
        return redirect()->route('admin.marketing.projects.index')->with('success', 'Marketing updated successfully');
    }
    public function getMarketing(Request $req)
    {
        $results = DB::table('projects')
            ->orderByRaw('
        CASE
           WHEN sort_order = NULL THEN 1
           ELSE NULL
        END,
        view_count DESC
        ')
            ->get();
        return $results;
        $sort_order = $req->sort_order;
        $marketing = ProjectMarketing::where('sort_order', $sort_order);
        return $marketing;
    }

    public function marketedProjects()
    {

        $marketedProjects = MarketedProject::select(
            'projects.project_title',
            'marketed_projects.sort_order',
            'marketed_projects.date_start',
            'marketed_projects.date_end'
        )->join('projects', 'projects.id', '=', 'marketed_projects.project_id')
            ->get();
        return view('admin.marketing.marketed', compact('marketedProjects'));
    }

}