<table class="table datatables table-bordered table-hover table-data" id="table-regulation">
    <thead>
        <tr class="text-uppercase">
            <th class="w-5p">No</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Link</th>
            <th class="w-5p">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $key => $item)
            <tr>
                <td class="w-5p">{{ $key + 1 }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->sub_title }}</td>
                <td><a href="{{ $item->link }}" target="_blank">{{ $item->link_text }}</td>
                <td class="w-5p">
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn p5x btn-sm btn-outline-warning"
                            onclick="openModal('regulation','edit', {{ $item->id }})"><span
                                class="fe fe-edit"></span></button>
                        <button type="button" class="btn p5x btn-sm btn-outline-danger"
                            onclick="manageData('delete',{{ $item->id }}, '{{ $item->name }}')"><span
                                class="fe fe-trash"></span></button>
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
