# This is my README

# To create dump db with drush
# Go to drupal directory
 $ cd /path/to/drupal
# Create and compress dump db
 $ drush sql-dump | gzip -c > ../db.sql.gz

# To restore db with drush
 $ cd /path/to/drupal
 $ zcat ..db.sql.gz | drush sqlc
