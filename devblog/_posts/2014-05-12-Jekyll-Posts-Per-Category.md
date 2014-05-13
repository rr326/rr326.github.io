---
layout: post
type: "post"
---

I wanted to have two different blogs on my site (one for business topics and one focusing on development). Jekyll provides categories to make this work, but figuring out exactly how to move through posts in a given category was non-trivial.

A few key points:

* A for loop for an object gives you an array, where the first elment is a name. So, you generally need to treat that element differently.
* `{ % for category in site.categories % }` gives you: [[cat0name, cat0posts], [cat1name, cat1posts]...] (or something like that!
* `{ % for catposts in category % }` gives you all the posts in the category: [post1, post2, post3]
* `{ % for catpost in catposts % }` gives you the actual post objects, so you can do things like {{catpost.content}}
* Note: Above I have an extra space between the { and % - that's because otherwise jekyll tries to process the liquid tag!  (Below I put my code in a { % raw % } ... { % endraw % } block.




{% highlight jinja %}
{% raw %}
{% for category in site.categories %}
    {% if category[0] == page.rcategory %}
        {% for catposts in category %}
            {% if forloop.first %}
                {% continue %}
            {% endif %}
            {% for catpost in catposts %}

                <p>{{ catpost.title }}</p>

            {% endfor %}
        {% endfor %}
    {% endif %}
{% endfor %}
{% endraw %}
{% endhighlight %}



# Other tidbits
* **jekyll serve --watch:**
If you change your _config.yml, be sure to restart your `jekyll serve --watch` - I can't tell you how many times I wasted minutes tracking down fake bugs because I forgot!
* **'content' vs. 'page.content':** Uggh - this was a big pain. In a layout file use { % content % } and not { % page.content &#124; markdownify % }.  If you do the latter, it will *mostly* work, but you'll get strange errors, like { % highlight % } blocks not working. Like most bugs, this one was obvious - ex post!

    > Content - In layout files, the rendered content of the Post or Page being wrapped. Not defined in Post or Page files.
* **pipe (&#124;) :** - Weird - pipe causes problems in the markdown. Type &amp;#124;  or \\\|
* **\{\% .. \%\}:** - These are interpreted as liquid templates. So either put a space between the {} and % or wrap in { %raw% } { %endraw% }

