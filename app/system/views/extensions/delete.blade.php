{!! form_open(current_url(),
    [
        'id' => 'edit-form',
        'role' => 'form',
        'method' => 'DELETE',
    ]
) !!}

<input type="hidden" name="_handler" value="onDelete">
<div class="toolbar">
    <div class="toolbar-action">
        <button
            type="submit"
            class="btn btn-danger"
            data-request="onDelete"
        >@lang('system::lang.extensions.button_yes_delete')</button>
        <a class="btn btn-default" href="{{ admin_url('extensions') }}">
            @lang('system::lang.extensions.button_return_to_list')
        </a>
    </div>
</div>

<div class="form-fields">
    @php $deleteAction = $extensionData
        ? lang('system::lang.extensions.text_files_data')
        : lang('system::lang.extensions.text_files');
    @endphp
    <p>
        {!! sprintf(lang('system::lang.extensions.alert_delete_warning'), $deleteAction, $extensionName) !!}
        <br/>
        {!! sprintf(lang('system::lang.extensions.alert_delete_confirm'), $deleteAction) !!}
    </p>
    @if ($extensionData)
        <div class="form-group span-full">
            <label for="input-delete-data"
                   class="control-label"
            >@lang('system::lang.extensions.label_delete_data')</label>
            <div
                id="input-delete-data"
            >
                <input
                    type="hidden"
                    name="delete_data"
                    value="0"
                >
                <div class="custom-control custom-switch">
                    <input
                        type="checkbox"
                        name="delete_data"
                        id="delete-data"
                        class="custom-control-input"
                        value="1"
                    />
                    <label
                        class="custom-control-label"
                        for="delete-data"
                    >@lang('admin::lang.text_no')/@lang('admin::lang.text_yes')</label>
                </div>
            </div>
        </div>
    @endif
</div>
{!! form_close() !!}
