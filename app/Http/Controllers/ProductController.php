<?php

namespace App\Http\Controllers;

use App\Serial;
use Illuminate\Http\Request;
use App\Product;
use App\Order;
use Illuminate\Support\Facades\Redirect;
use Validator;

use Illuminate\Support\Facades\View;


class ProductController extends Controller
{
    public function index()
    {
        $pro = Product::paginate(10);
        return View::make('product', compact('pro'));
    }
    public function all()
    {
        $pro = Product::paginate(10);
        return View::make('admin.product.index', compact('pro'));
    }
    public function create()
    {
        return view('admin.product.add');
    }
    public function store(Request $request)
    {
        if($request->has('btn_send')) {
            $messages = [
                'pro_name.required' => 'وارد کردن نام محصول الزامی است',
                'pic.required' => 'عکس محصول را وارد کنید',
                'price.required' => 'قیمت محصول الزامی است',
                'price.integer' => 'قیمت محصول را صحیح وارد کنید',
                'count_pc.integer' => 'تعداد کاربران کامپیوتر را صحیح وارد کنید',
                'count_mobile.integer' => 'تعداد کاربران موبایل را صحیح وارد کنید',
                'status.integer' => 'وضعیت را صحیح وارد کنید',
            ];
            $validator = Validator::make($request->all(), [
                'pro_name' => 'required',
                'count_pc' => 'integer',
                'price' => 'required|integer',
                'count_mobile' => 'integer',
                'status' => 'integer',

            ], $messages);
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $store = new Product();
            $store->name = $request->pro_name;
            $img = $request->file('pic');
            $store->state = $request->status;
            $store->price = $request->price;
            $store->img = $img->getClientOriginalName();
            $store->count_user_pc = $request->count_pc;
            $store->count_user_mobile = $request->count_mobile;
            $store->save();
            return Redirect::back()->withErrors(['محصول با موفقیت ثبت شد']);

        }
    }
    public function delete($id)
    {
        $pro = Product::find($id);
        $pro->delete();
        return Redirect::back();
    }
    public function edit($id)
    {
        $model = Product::find($id);
        return View('admin.product.edit',['model'=>$model]);
    }
    public function update(Request $request)
    {

        if ($request->has('btn_send')) {
            $messages = [
                'pro_name.required' => 'وارد کردن نام محصول الزامی است',
                'price.required' => 'قیمت محصول الزامی است',
                'price.integer' => 'قیمت محصول را صحیح وارد کنید',
                'count_pc.integer' => 'تعداد کاربران کامپیوتر را صحیح وارد کنید',
                'count_mobile.integer' => 'تعداد کاربران موبایل را صحیح وارد کنید',
                'status.integer' => 'وضعیت را صحیح وارد کنید',
            ];
            $validator = Validator::make($request->all(), [
                'pro_name' => 'required',
                'count_pc' => 'integer',
                'price' => 'required|integer',
                'count_mobile' => 'integer',
                'status' => 'integer',

            ], $messages);
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $id = $request->id;
            $pro=Product::find($id);
            $img = $request->file('pic');
            $pro->update([
                'name'=>$request->pro_name,
                'state' => $request->status,
                'price' => $request->price,
                'count_user_pc'=>$request->count_pc,
                'count_user_mobile'=>$request->count_mobile
            ]);
            return Redirect::back()->withErrors(['محصول با موفقیت بروزرسانی شد']);

        }
    }
    public function view_order($id)
    {
        session(['id' => $id]);

        return view('order');
    }
    public function order(Request $request)
    {
        if($request->has('btn_send')) {
            $messages = [
                'name.required' => 'وارد کردن نام محصول الزامی است',
                'family.required' => 'وارد کردن نام محصول الزامی است',
                'number.integer' => 'تلفن را صحیح وارد کنید',
                'count.integer' => 'تعداد را صحیح وارد کنید',
                'email.email' => 'لطفا ایمیل را به درستی وارد کنید'
            ];
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'family' => 'required',
                'number' => 'integer',
                'count' => 'integer',
                'email' => 'email',

            ], $messages);
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $pro_id = $request->session()->get('id');
            $count = $request->count;
            $serial= Serial::where('antivirus_id', $pro_id)->where('is_sell',0)->take($count)->get();
            foreach ($serial as $item)
            {
                $order = new Order();
                $order->name = $request->name;
                $order->family = $request->family;
                $order->mobile = $request->mobile;
                $order->email = $request->email;
                $order->serial_id = $item->id;
                $serial_id = $item->id;
                $order->save();
                Serial::where('id', $serial_id)->update(['is_sell'=>1]);
                $data = array('username'=> $item->username,'password'=>$item->password);
                return View::make('result',compact('data'));
            }
        }
        return 'ok';

    }
}
