@extends('backend::layouts.default')

@section('content')
	
<div class="panel panel-default"> 
     <div class="panel-heading"> 
          <a class="btn m-b-xs w-xs btn-success"  href="/backend/cms/cate-add">添加栏目</a> 
     </div> 
     <div class="panel-body b-b b-light">
         <table class="table m-b-none footable-loaded footable" ui-jq="footable" data-filter="#filter" data-page-size="5">
                <thead>
                <tr>
                    <th data-sort-ignore="true"></th>
                    <th data-toggle="true" class="footable-sortable">id<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">标题<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">别名<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">更新时间<span class="footable-sort-indicator"></span></th>
                    <th class="footable-sortable">创建时间<span class="footable-sort-indicator"></span></th>
                    <th data-sort-ignore="true">操作</th>
                </tr>
                </thead>
                <tbody>
                <!-- ngRepeat: category in categories -->
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="5">
                        <div class="row">
                            <div class="col-sm-8 hidden-xs">
                                <button class="btn btn-sm btn-info" ng-click="checkAll()">全选</button>
                                <button class="btn btn-sm btn-info" ng-click="uncheckAll()">全不选</button>
                                <select name="actions" ng-model="cate.actions" class="input-sm form-control w-sm inline v-middle ng-pristine ng-valid">
                                    <option value="">操作</option>
                                    <option value="1">删除</option>
                                    <option value="2">推荐</option>
                                    <option value="3">不推荐</option>
                                    <option value="4">显示</option>
                                    <option value="5">不显示</option>
                                </select>
                                <button class="btn btn-success" type="submit" ng-click="onApply()">应用</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="hide-if-no-paging">
                    <td colspan="5" class="text-center">
                        <ul class="pagination"></ul>
                    </td>
                </tr>
                </tfoot>
            </table>
     </div> 
</div> 
	
@stop