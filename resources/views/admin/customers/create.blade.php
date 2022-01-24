@extends('admin.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="col" style="font-family: AKbalthom KhmerHand">អតិថិជន</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item" style="font-family: AKbalthom KhmerHand"><a href="#">ទំព័រដើម</a></li>
                        <li class="breadcrumb-item" style="font-family: AKbalthom KhmerHand">អតិថិជន</li>
                    </ol>
                </div><!-- /.col -->
                <div class="container-fluid mt-4">
                    <div class="card">
                        <div class="card-head py-2">
                            <div class="container p-5">
                                <div class="modal-header">
                                    <span style="font-family: AKbalthom KhmerHand;">ចុះឈ្មោះអតិថិជនថ្មី</span>
                                    <button type="button" onclick="event.preventDefault();
                                            document.getElementById('form-submit').submit()";
                                            class="btn btn-outline-primary">
                                        <i class="fas fa-save"></i> រក្សាទុក</button>
                                </div>
                                <form action="#" id="form-submit">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">ឈ្មោះអតិថិជន</label>
                                                <input type="text" class="form-control" id="name" placeholder="ឈ្មោះបុគ្គលិក">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gender">ភេទ</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>ជ្រើសរើសភេទ</option>
                                                    <option>ប្រុស</option>
                                                    <option>ស្រី</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">លេខទូរសព្ទ</label>
                                                <input type="number" class="form-control" id="name" placeholder="លេខទំនាក់ទំនង">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="img">រូបភាព</label>
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input" id="img">
                                                    <label class="custom-file-label" for="img">ជ្រើសរើសរូបភាព</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="loact">ទីលំនៅ</label>
                                            <textarea class="form-control" id="locat" placeholder="ទីលំនៅបច្ចុប្បន្ន" ></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div><!-- /.container-fluid -->
    </div>
    </div>
@endsection
