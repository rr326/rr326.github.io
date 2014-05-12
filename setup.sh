#!/opt/local/bin/zsh

# Set up some aliases for jekyll, since I want to run this just like github pages per https://help.github.com/articles/using-jekyll-with-pages

bundle update

echo "\n\n************"
echo "You have to run this as 'source setup.sh' to get the aliases to work."
echo "************"

alias jekyll="bundle exec jekyll"
