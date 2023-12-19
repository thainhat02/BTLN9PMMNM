<form action="">
    <div class="filter-widget" id="category-filter">
        <h4 class="fw-title">Danh mục</h4>
        <ul class="filter-categories">
            @foreach($categories as $category)
                <li class=""><a class="{{Request::is('shop/category/'.$category->name) ? 'active' : ''}}" href="/shop/category/{{$category->name}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="filter-widget" id="brand-filter">
        <h4 class="fw-title">Nhà sản xuất</h4>
        <div class="fw-brand-check">
            @foreach($brands as $brand)
                <div class="bc-item">
                    <label for="bc-{{$brand->id}}">
                        {{$brand->name}}
                        <input type="checkbox"
                               onchange="this.form.submit();"
                               {{(request("brand")[$brand->id] ?? '') == 'on' ? 'checked' : ''}}
                               id="bc-{{$brand->id}}"
                               name="brand[{{$brand->id}}]">
                        <span class="checkmark"></span>
                    </label>
                </div>
            @endforeach
        </div>
    </div>
    <div class="filter-widget" id="price-filter">
        <h4 class="fw-title">Giá</h4>
        <div class="filter-range-wrap">
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="min-amount" name="price_min">
                    <input type="text" id="max-amount" name="price_max">
                </div>
                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                     data-min="0" data-max="1999"
                     data-min-value="{{str_replace('$', '', request('price_min'))}}"
                     data-max-value="{{str_replace('$', '', request('price_max'))}}">
                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                </div>
            </div>
        </div>
        <button  type="submit" class="filter-btn">Lọc</button>
    </div>
    
</form>
