{{-- Part of Front project. --}}
<?php
/**
 * Global variables
 * --------------------------------------------------------------
 * @var $app      \Windwalker\Web\Application                 Global Application
 * @var $package  \Lyrasoft\Luna\LunaPackage                  Package object.
 * @var $view     \Windwalker\Data\Data                       Some information of this view.
 * @var $uri      \Windwalker\Uri\UriData               Uri information, example: $uri->path
 * @var $datetime \DateTime                                   PHP DateTime object of current time.
 * @var $helper   \Windwalker\Core\View\Helper\Set\HelperSet  The Windwalker HelperSet object.
 * @var $router   \Windwalker\Core\Router\MainRouter          Route builder object.
 * @var $asset    \Windwalker\Core\Asset\AssetManager         The Asset manager.
 *
 * View variables
 * --------------------------------------------------------------
 * @var $item  \Lyrasoft\Luna\Admin\Record\ArticleRecord
 * @var $state \Windwalker\Structure\Structure
 */
?>

@extends('_global.html')

@section('content')
    <style>
        .comment-user-avatar {
            width: 64px;
            height: 64px;
            border-radius: 50%;
        }
    </style>
<div class="container article-item">
    <p style="margin-top: 40px">
        <a class="btn btn-default" href="{{ $router->route('article_category', array('path' => $item->category->path)) }}">
            <span class="glyphicon glyphicon-chevron-left fa fa-chervon-left"></span>
            Back to List
        </a>
    </p>
    <p>
        <img src="{{ $item->image }}" alt="Image">
    </p>
    <hr />
    <h2>{{ $item->title }}</h2>
    <p>{{ $item->introtext }}</p>
    <p>{{ $item->fulltext }}</p>

    @if ($item->tags->notNull())
        <hr />

        @foreach ($item->tags as $tag)
            <a class="label label-info" href="{{ $router->route('article_tag', array('tag' => $tag->alias)) }}">
                {{ $tag->title }}
            </a>
            &nbsp;
        @endforeach

    @endif

    @if (property_exists($item, 'comments'))
    <hr />

    <div id="comments">
        <h4>
            {{ count($item->comments) }} Comment(s)
        </h4>

        @foreach ($item->comments as $comment)
            <div class="row">
                <div class="col-xs-1 text-center">
                    <img class="comment-user-avatar" src="{{ $comment->user_avatar }}" alt="Avatar">
                </div>
                <div class="col-xs-11">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $comment->user_name }}</h3>
                        </div>
                        <div class="panel-body">
                            {!! nl2br($this->escape($comment->content)) !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endif

</div>
@stop
