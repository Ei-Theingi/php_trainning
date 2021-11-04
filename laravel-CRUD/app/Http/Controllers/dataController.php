<?php
namespace App\Http\Controllers;
use Laracsv\Export;
use App\Models\data;
use League\Csv\Reader;
use Illuminate\Http\Request;
use App\Http\Requests\dataUploadRequest;
use Illuminate\Support\Facades\Validator;
use App\Contracts\Services\data\dataServiceInterface;
use App\Mail\dataMail;
use Illuminate\Support\Facades\Mail;

class dataController extends Controller
{

    private $dataservice;
  public function __construct(dataServiceInterface $dataservice)
    {
      $this->dataservice = $dataservice;
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  
    {
      
       $validator = Validator::make($request->all(), [
         'rno' => 'required',
         'name' => 'required',
         'subject'=>'required',
         'title'=>'required',
         'date'=>'required',
         'percent'=>'required',
     ]);
 
     if ($validator->fails()) {
         return back()
                     ->withErrors($validator)
                     ->withInput();
     }
     $this->dataservice->store($request);
         return redirect('list');
        return back()->with(['insertSuccess' =>'User Information recorded']);
    
   
  }
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list( )
    {
       
        return view('data.list',['data'=> $this->dataservice->list()]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('data.update',['data'=>$this->dataservice->edit($id)]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $validator = Validator::make($request->all(), [
        'rno' => 'required',
        'name' => 'required',
        'subject'=>'required',
        'title'=>'required',
        'date'=>'required',
        'percent'=>'required',
    ]);

    if ($validator->fails()) {
        return back()
                    ->withErrors($validator)
                    ->withInput();
    }
        $this->dataservice->update($request,$id);
        return redirect('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $this->dataservice->delete($id);
        return redirect('list');
    }


  
  /*
   * To download post csv file
   * @return File Download CSV file
   */
  public function downloadCSV()
  { 
    $downloaddata = data::get();

        $csvExporter = new \Laracsv\Export();

        $csvExporter->build($downloaddata, [
          'id'=>'ID',
          'rno'=>'Rno',
          'name'=>'Name',
          'Subject'=>'Subject',
          'title'=>'Title',
          'date' =>'Date',
          'percent'=>'Percent',
     
        ]);

        $csvReader = $csvExporter->getReader();

        
        $filename = 'datalist.csv';

        return response((string) $csvReader)
            ->header('Content-Type', 'text/csv; charset=UTF-8')
            ->header('Content-Disposition', 'attachment; filename="'.$filename.'"');
    }

    public function sendEmail(){
           $maildata =data::get();
         
    }
    public function search(Request $request){
     
    }
  }

