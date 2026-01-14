<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UserRoles;
use Illuminate\Http\Request;

class UserRolesController extends Controller
{
    private $screenPrefix = 'user_roles';

    public function index()
    {
        $items = UserRoles::orderBy('id', 'ASC')->get();

        $validateArr = ['screen_prefix' => $this->screenPrefix];
        $isScreenAccess = $this->validateScreenAccess($validateArr);

        return view('backend.user-roles.index',[
            'items' => $items,
            'is_screen_access' => $isScreenAccess
        ]);
    }


    public function get(Request $request){
        $req = $request->all();
        $id = !empty($req['id']) ? $req['id'] : 0;


        if (!empty($id)){
            $get = UserRoles::find($id);
            $status = 'success';

        }else{
            $status = 'error';
        }


        $out = [
            'status' => $status,
            'id' => $id,
            'user_role' => $get->user_role,
            'display_name' => $get->display_name,
        ];
        return response()->json($out);

    }

    public function store(Request $request){
        $req = $request->all();
        $id = !empty($req['id']) ? $req['id'] : 0;

        /*$validator = $request->validate([
            'news_category' => ['required', 'string', 'unique:product_gender_categories'],
        ]);*/

        $validator = 1;

        if ($validator){

            if (!empty($id)){
                $save = UserRoles::find($id);
            }
            else{
                $treq = ['screen' => 'user_roles', 'id' => ''];
                $uuId = $this->generateUUId($treq);

                $save = New UserRoles();
                $save->uuid = $uuId;
                $save->status = 1;
            }

            $save->user_role = $req['user_role'];
            $save->display_name = !empty($req['display_name']) ? $req['display_name'] : null;
            $save->save();
            $status = 'success';
            $messageTitle = 'Success';
            $messageText = 'User Role saved';
        }else{

            $status = 'error';
            $messageTitle = 'Error!';
            $messageText = 'User Role already exist!';
        }



        $out = [
            'status' => $status,
            'message_title' => $messageTitle,
            'message_text' => $messageText,
        ];
        return response()->json($out);

        /*if ($response->successful()) {
            $rdata = $response->json();
            if (!empty($rdata)) {
                return response()->json($rdata);
            }
        } else if ($response->status() == 400) {
            return response()->json($response->json(), 422);
        } else if ($response->status() == 401) {
            return response()->json($response->json(), 401);
        }*/
    }

    public function status(Request $request){
        $req = $request->all();
        $id = !empty($req['id']) ? $req['id'] : 0;

        $text = '';
        $class = '';

        if (!empty($id)){
            $get = UserRoles::find($id);

            if ($get->status == 1){
                $get->status = 0;
            }else {
                $get->status = 1;
            }
            $get->save();
            $status = 'success';
            $get = UserRoles::find($id);
            $getStatus = $this->categoryStatus($get->status);
            $text = $getStatus->text;
            $class = $getStatus->class;

        }else{
            $status = 'error';
        }


        $out = [
            'status' => $status,
            'text' => $text,
            'class' => $class,
        ];
        return response()->json($out);

    }

    public function slugGenerator(Request $request){

        $status = 'success';
        $isExist = 0;
        $id = $request->id;
        $slug = $this->generateSeoURL($request->title, 1);

        $getCount = UserRoles::where('slug', $slug)->count();
        if ($getCount > 0){
            $item = UserRoles::where('id', $id)->first();
            if (!empty($item)){
                if ($item->slug != $slug){
                    $isExist = 1;
                }
            }else{
                $isExist = 1;
            }
        }

        return response()->json([
            'status' =>  $status,
            'is_exist' =>  $isExist,
            'slug' =>  $slug,
        ]);
    }
}
