@extends('backend::layouts.default')

@section('content')
	
    <form name="form" class="form-horizontal m-t-lg" method="post" action="/backend/cms/cate-store">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="form-group">
            <label class="col-sm-2 control-label">上级栏目</label>
            <div class="col-sm-8">
                <select class="form-control ng-pristine ng-invalid ng-invalid-required" name="pid"  required="required">
                    <option value="0">--作为一级栏目--</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">标题</label>
            <div class="col-sm-8">
                <input type="text" name="title" class="form-control"/>
            </div>
        </div>
        <div class="form-group"> 
           <label class="col-sm-2 control-label">slug</label> 
           <div class="col-sm-8"> 
                <input type="text" name="slug" class="form-control"/>
            </div> 
        </div>
        <div class="form-group"> 
            <label class="col-sm-2 control-label">备注</label> 
            <div class="col-sm-8"> 
                <textarea name="description" class="form-control"></textarea>
            </div> 
        </div>
        <footer class="panel-footer text-left bg-light lter">
            <button type="submit" class="btn btn-success" >提交</button> 
            <span class="m-l-sm ng-binding"></span>
        </footer>    
    </form>

	
@stop