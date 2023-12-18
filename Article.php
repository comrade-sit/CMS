<!-- Article.php -->

<?php

class Article {
    public $articleId;
    public $title;
    public $content;
    public $author;
    public $comments = [];

    public function displayInfo() {
        echo "Article ID: $this->articleId\n";
        echo "Title: $this->title\n";
        echo "Content: $this->content\n";
        $this->author->displayInfo();
        echo "Comments:\n";
        foreach ($this->comments as $comment) {
            $comment->displayInfo();
        }
    }
}
?>
