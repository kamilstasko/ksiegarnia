@if (!in_array($data['slug'],['login','forgot-password', 'reset-password', 'account']) and !is_numeric($data['slug']))
    <div class="top-banner">
        <div class="wrapper first">
            <div class="wrapper">
                    <h1 class="main-title">
                        {{ $data['title'] }}
                    </h1>
            </div>
        </div>
    </div>
@endif