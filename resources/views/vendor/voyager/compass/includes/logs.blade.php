
<div class="col-sm-3 col-md-3 sidebar">
  <h3><i class="voyager-logbook"></i> {{ __('voyager::compass.logs.title') }} <small>{{ __('voyager::compass.logs.text') }}.</small></h3>
  <div class="list-group">
    @foreach($files as $file)
      <a href="?log={{ base64_encode($file) }}"
         class="list-group-item @if ($current_file == $file) llv-active @endif">
        <i class="voyager-file-text"></i> {{$file}}
      </a>
    @endforeach
  </div>
</div>
<div class="col-sm-9 col-md-9 table-container">
    <div class="alerts">
        <div class="alert alert-warning ">
            演示账号不提供日志查看功能，如需了解更多，请自行安装体验，查看<a href="https://tu6ge.github.io/voyager-doc-zh-CN/" target="_blank" >文档</a>了解更多
        </div>
    </div>
  @if ($logs === null)
    <div>
      {{ __('voyager::compass.logs.file_too_big') }}
    </div>
  @else
    <table id="table-log" class="table table-striped">
      <thead>
      <tr>
        <th>{{ __('voyager::compass.logs.level') }}</th>
        <th>{{ __('voyager::compass.logs.context') }}</th>
        <th>{{ __('voyager::compass.logs.date') }}</th>
        <th>{{ __('voyager::compass.logs.content') }}</th>
      </tr>
      </thead>
      <tbody>

        
      </tbody>
    </table>
  @endif
  <div>
    @if($current_file)
      <a href="javascript:;"
      data-toggle="popover" data-container="body" data-content="演示版不可运行"
            data-placement="bottom"
      ><span class="glyphicon glyphicon-download-alt"></span>
        {{ __('voyager::compass.logs.download_file') }}</a>
      -
      <a href="javascript:;"
      data-toggle="popover" data-container="body" data-content="演示版不可运行"
            data-placement="bottom"
      ><span
            class="glyphicon glyphicon-trash"></span> {{ __('voyager::compass.logs.delete_file') }}</a>
      @if(count($files) > 1)
        -
        <a ><span class="glyphicon glyphicon-trash"></span> {{ __('voyager::compass.logs.delete_all_files') }}</a>
      @endif
    @endif
  </div>
</div>
