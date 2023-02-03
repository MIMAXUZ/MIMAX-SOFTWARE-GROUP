<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use App\Models\Team\Team;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function index_member()
    {
        $team_members = Team::select('id', 'image_member', 'member_full_name', 'member_job_uz', 'is_active', 'created_at')->orderBy('created_at', "DESC")->get();
        return view('admin.team.index', compact('team_members'));
    }

    public function is_active($id)
    {
        $update = Team::find($id);
        if($update->is_active == 1){
            $update->is_active = 0;
        }else{
            $update->is_active = 1;
        }
        $update->save();
        return redirect()->back();
    }

    public function create_member()
    {
        $team_members = Team::get();
        return view('admin.team.addEditMember', compact('team_members'));
    }

    public function store_member(Request $request)
    {
        // dd($request);
        $data = $request->except(array('_token'));
        $rule = array(
            'member_full_name' => 'required|string|max:255',
            'member_job_uz' => 'required|string|max:60',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            \Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $team_members = Team::findOrFail($inputs['id']);
        } else {
            $team_members = new Team;
        }

        $image = $request->file('image_member');
    
        if ($image) {
            $tmpFilePath = '/upload/team/';
            $fileName = $tmpFilePath. time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() .$tmpFilePath, $fileName);
            $team_members->image_member = $fileName;
        }

        $team_members->member_full_name = $inputs['member_full_name'];
        $team_members->member_job_uz = $inputs['member_job_uz'];
        $team_members->member_job_ru = $inputs['member_job_ru'];
        $team_members->member_job_en = $inputs['member_job_en'];
        $team_members->facebook_url = $inputs['facebook_url'];
        $team_members->twitter_url = $inputs['twitter_url'];
        $team_members->linkedin_url = $inputs['linkedin_url'];
        $team_members->instagram_url = $inputs['instagram_url'];
        $team_members->save();

        if (!empty($inputs['id'])) {
            \Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/team');
        } else {
            \Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/team');
        }
    }

    public function edit_member($id)
    {
        $team_members = Team::findOrFail($id);
        return view('admin.team.addEditMember', compact('team_members'));
    }

    public function delete_member($id)
    {
        $team_members = Team::findOrFail($id);
        $team_members->delete();
        \Session::flash('warning', __('ALL_SUCCESSFUL_DELETED'));
        return redirect()->back();
    }

}
