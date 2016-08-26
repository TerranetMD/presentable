# Presentable Pattern Implementation

Move presentation logic out from the Object class.

# Installation

```
composer require terranet/presentable
```

# Use Case

```
<?php

class Post implements PresentableInterfacee
{
    use PresentableTrait;
    
    protected $presenter = PostPresenter::class;
}
```

```
<?php

class PostPresenter extends Presenter
{
    public function title()
    {
        return '<a href="/posts/read/' . $this->presentable->url . '">' . $this->presentable->title . '</a>';
    }
}
```

In view, instead of calling `$post->title`, call Presenter's method `$post->present()->title`;


## Enjoy!