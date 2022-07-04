<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Project;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Category;
use App\Models\BlogCategories;
use App\Models\Blogimages;
use App\Models\ProjectImages;
use App\Models\CompanyImages;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use PDO;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::where('status','1')->get()->sortByDesc('id');
        return view('index', compact('companies'));
    }
    // public function company_details(Company $company){
    //     $companies = Company::all();
    //     return view('company_details', compact('company','companies'),['company'=>$companies]);
    // }
    function company_details($id)
    {
        $companies = Company::where('status','1')->get()->sortByDesc('id');
        $companies_details= Company::find($id);
        return view('company_details',['company'=>$companies_details],compact('companies'));
    }
    function projects_details($id)
    {
        $companies = Company::where('status','1')->get()->sortByDesc('id');
        $projects_details= Project::find($id);
        return view('projects_details',['projects'=>$projects_details],compact('companies','projects_details'));
    } 
    function blogs_details($id)
    {
     $companies =Company::where('status','1')->get()->sortByDesc('id');
     $blog =Blog::find($id);
     return view('blogs_details', compact('companies','blog'));
    }

    function projects()
    {
        $companies = Company::where('status','1')->get()->sortByDesc('id');
        $categories = Category::all();
        $projects= Project::where('status','1')->get()->sortByDesc('id');
        return view('projects',compact('projects','categories','companies'));
    }
    function projects_cat($id)
    {
        $companies = Company::where('status','1')->get()->sortByDesc('id');
        $categories = Category::all();
        $projects= Project::where('category_id', $id)->get();
        return view('projects',compact('projects','categories','companies'));
    }
    function blogs()
    {   
        $companies = Company::where('status','1')->get()->sortByDesc('id');
        $blogs= Blog::where('status','1')->get()->sortByDesc('id');
        $BlogCategories= BlogCategories::all();
        return view('blogs',compact('blogs','companies'),['BlogCategories'=>$BlogCategories]);
    }
    function contact()
    {
        $companies = Company::where('status','1')->get()->sortByDesc('id');
        return view('contact', compact('companies'));
    }

     //admin panel
     public function adminpanel()
     {
        return view('back.layout',);
     }
     public function projectform()
     {
        $categories = Category::all();
        $projects = null;
        return view('back.projects_form',compact('categories', 'projects'));
     }
     public function blogform()
     {
        $categories = BlogCategories::all();
        $blogs=null;
        return view('back.blogs_form',compact('categories','blogs'));
     }
     public function edit($id)
     {
        $projects= Project::find($id);
        $categories = Category::all();
        return view('back.projects_form',compact('projects','categories'));
     }
     public function editBlog($id)
     {
        $blogs= Blog::find($id);
        $categories = BlogCategories::all();
        return view('back.blogs_form',compact('blogs','categories'));
     }
     public function editCompany($id)
     {
        $companies= Company::find($id);
        return view('back.company_form',compact('companies'));
     }
     public function update(Request $req, $id)
     {  
         Project::where('id', $req->id)->update([
            'title' => $req->title,
            'category_id'=>$req->category_id,
            'description' => $req->description,
            'date'=>$req->date,
        ]);
        $project = Project::find($id);
        $image = $req->file('image');
        if ( !empty($image) ) { 
        foreach($image as $key => $img_multi)
        {
            $key++;
            if($req->hasFile('image'))
            {
                $project_image = new ProjectImages();
                $imageName =$key.Str::slug($project->title). '.' .$img_multi->getClientOriginalExtension();
                $img_multi->move(public_path('projects/'.Str::slug($project->title)),$imageName);
                $project_image ->project_id = $project->id;
                $project_image ->image='projects/'.Str::slug($project->title).'/'.$imageName;
                $project_image ->save();
            }
        }
    }
        $projects = Project::all()->sortByDesc('id');
        return view('back.projects_list',compact('projects'));
     }
  
     public function updateBlog(Request $req,$id)
     {
        Blog::where('id', $req->id)->update([
            'name' => $req->name,
            'blog_category_id'=>$req->blog_category_id,
            'description' => $req->description,
        ]);
        $blog = Blog::find($id);
        $image = $req->file('image');
        if ( !empty($image) ) { 
            foreach($image as $key => $img_multi)
            {
                $key++;
                if($req->hasFile('image'))
                {
                    $blog_image = new Blogimages();
                    $imageName =$key.Str::slug($req->name). '.' .$img_multi->getClientOriginalExtension();
                    $img_multi->move(public_path('blogs/'.Str::slug($req->name)),$imageName);
                    $blog_image->blog_id = $blog->id;
                    $blog_image->image='blogs/'.Str::slug($req->name).'/'.$imageName;
                    $blog_image->save();
                }
            }
         }
            
       
         $blogs= Blog::all()->sortByDesc('id');
         return view('back.blogs_list',compact('blogs'));
     }
     public function updateCompany(Request $req,$id)
     {
        Company::where('id', $req->id)->update([
            'name' => $req->name,
            'logo'=>$req->logo,
            'description' => $req->description,
        ]);
        $company = Company::find($id);
        $image = $req->file('image');

        if ( !empty($image) ) { 

            foreach($image as $key => $img_multi)
            {
                $key++;
                if($req->hasFile('image'))
                {
                    $company_image = new CompanyImages();
                    $imageName =$key.Str::slug($req->name). '.' .$img_multi->getClientOriginalExtension();
                    $img_multi->move(public_path('company/'.Str::slug($req->name)),$imageName);
                    $company_image ->company_id = $company->id;
                    $company_image ->image='company/'.Str::slug($req->name).'/'.$imageName;
                    $company_image ->save();
                }
            }
           
         }
            
       
         $companies= Company::all()->sortByDesc('id');
         return view('back.company_list',compact('companies'));
     }
     public function companyform()
     {
        $companies = null;
        return view('back.company_form',compact('companies'));
     }
     public function companyList()
     {
        $companies = Company::all()->sortByDesc('id');
        return view('back.company_list',compact('companies'));
     }
     public function bloglist()
     {
        $blogs= Blog::all()->sortByDesc('id');
        return view('back.blogs_list',compact('blogs'));
     }
     public function projectlist()
     {
        $projects = Project::all()->sortByDesc('id');
        return view('back.projects_list',compact('projects'));
     }
     public function delete($id)
     {
         $projects= Project::find($id);
         $projects->delete();
         return redirect('adminpanel/projectslist');
     }
  
     public function deleteBlog($id)
     {
         $blogs= Blog::find($id);
         $blogs->delete();
         return redirect('/adminpanel/bloglist');
     }
     public function deleteCompay($id)
     {
         $companies = Company::find($id);
         $companies->delete();
         return redirect('/adminpanel/companylist');
     }
     public function login()
     {
        return view('back.login');
     }
     public function register()
     {
        return view('back.register');
     }
     public function reset()
     {
        return view('auth.passwords.reset');
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function StoreImg(Request $request)
     {
        // $request->validate([
        //     'name'=>'min:3',
        //     'image'=>'required|image|mimes:jpeg,png,jpg,jfif|max:2048'
        // ]);
            $blog=new Blog();
            $blog->name=$request->name;
            $blog->blog_category_id =$request->blog_category_id;
            $blog->description=$request->description;
            $blog->save();
        $image = $request->file('image');
        foreach($image as $key => $img_multi)
        {
            $key++;
            if($request->hasFile('image'))
            {
                $blog_image = new Blogimages();
                $imageName =$key.Str::slug($request->name). '.' .$img_multi->getClientOriginalExtension();
                $img_multi->move(public_path('blogs/'.Str::slug($request->name)),$imageName);
                $blog_image->blog_id = $blog->id;
                $blog_image->image='blogs/'.Str::slug($request->name).'/'.$imageName;
                $blog_image->save();
            }
        }
       
        return redirect()->route('BlogList');
     }

     public function destroyImg($id) {

        $image = ProjectImages::find($id);

         unlink($image->image);

         ProjectImages::where("id", $image->id)->delete();

        return back();
        // return back()->with("success", "Image deleted successfully.");

    }
    public function destroyblogImg($id) {

        $image = Blogimages::find($id);

         unlink($image->image);

         Blogimages::where("id", $image->id)->delete();

        return back();
        // return back()->with("success", "Image deleted successfully.");

    }
    public function destroyCompanyImg($id) {

        $image = CompanyImages::find($id);

         unlink($image->image);

         CompanyImages::where("id", $image->id)->delete();

        return back();
        // return back()->with("success", "Image deleted successfully.");

    }
     public function StoreProjectImg(Request $request)
     {
            $project=new Project();
            $project->title=$request->title;
            $project->category_id =$request->category_id;
            $project->description=$request->description;
            $project->date=$request->date;
            $project->save();
        $image = $request->file('image');
        foreach($image as $key => $img_multi)
        {
            $key++;
            if($request->hasFile('image'))
            {
                $project_image = new ProjectImages();
                $imageName =$key.Str::slug($request->title). '.' .$img_multi->getClientOriginalExtension();
                $img_multi->move(public_path('projects/'.Str::slug($request->title)),$imageName);
                $project_image ->project_id = $project->id;
                $project_image ->image='projects/'.Str::slug($request->title).'/'.$imageName;
                $project_image ->save();
            }
        }
       
        return redirect()->route('ProjectsList');
     }
     public function StoreCompanyImg(Request $request)
     {
            $company=new Company();
            $company->name=$request->name;
            $company->logo =$request->logo;
            $company->description=$request->description;
            $company->save();
            $image = $request->file('image');

        foreach($image as $key => $img_multi)
        {
            $key++;
            if($request->hasFile('image'))
            {
                $company_image = new CompanyImages();
                $imageName =$key.Str::slug($request->name). '.' .$img_multi->getClientOriginalExtension();
                $img_multi->move(public_path('company/'.Str::slug($request->name)),$imageName);
                $company_image ->company_id = $company->id;
                $company_image ->image='company/'.Str::slug($request->name).'/'.$imageName;
                $company_image ->save();
            }
        }
       
        return redirect()->route('CompanyList');
     }
     public function blog_status($id)
    {
        $blog= Blog::where('id', $id)->first();
        $blog->update([
            'status' => ($blog->status == 1) ? '0' : '1'
        ]);

        return 1;
    }
    public function project_status($id)
    {
        $project= Project::where('id', $id)->first();
        $project->update([
            'status' => ($project->status == 1) ? '0' : '1'
        ]);

        return 1;
    }
    public function company_status($id)
    {
        $company= Company::where('id', $id)->first();
        $company->update([
            'status' => ($company->status == 1) ? '0' : '1'
        ]);

        return 1;
    }
    public function company_image_status($id)
    {
        $companyimage= CompanyImages::find($id);
        $company= Company::find($companyimage->company_id);
        foreach($company->company_images as $image){
            $image->status ='0';
            $image->save();
        }
        $companyimage->status ='1';
        $companyimage->save();

        return 1;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
