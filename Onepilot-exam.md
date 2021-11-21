# Onepilot Exam

## Analysis

### How would you improve this project from a code perspective ?

1) For more security I would add a "Cast" named SafeCast which contains a method which uses strip_tags to return a string after removing all PHP and HTML tags from the code. With that we will be sure that our data stored in the database is safe.

SafeCast.php : 
```
public function set($model, $key, $value, $attributes)
{
    return strip_tags($value);
}
```

2) In the models, I would replace the :``` protected $garded = []; ``` by : ``` protected $fillable = ["field 1", "fields 2" ... etc]; ``` to avoid the risk of SQL injection; With the fillable we specifies the fields to be handled in the database while garded is open for all.
 


### How would you improve this project from a product (features) perspective ?

1) For the 'Report' I would add a export feature that export data to csv for exemple.

2) In the Contact Creation form, just under the organization field, I would add a small link "+ add new organization" which opens a Modal (creation organization form) when clicked on it. So that we can create and then assign the contact to the organization directly without moving from the contact page .
