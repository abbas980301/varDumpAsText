# varDumpAsText
Simple and cool tool for echo array as text in command line.

## Usage and example output

```php
include 'varDumpAsText.php';

$array = [
	// ...
];
echo rt($array)
```


```php
array(2) {
  ["update_id"]=>
  int(297)
  ["update"]=>
  array(4) {
    ["_"]=>
    string(23) "updateNewChannelMessage"
    ["message"]=>
    array(11) {
      ["_"]=>
      string(7) "message"
      ["out"]=>
      bool(false)
      ["mentioned"]=>
      bool(false)
      ["media_unread"]=>
      bool(false)
      ["silent"]=>
      bool(false)
      ["post"]=>
      bool(false)
      ["id"]=>
      int(652)
      ["from_id"]=>
      int(373018943)
      ["to_id"]=>
      array(2) {
        ["_"]=>
        string(11) "peerChannel"
        ["channel_id"]=>
        int(1110285821)
      }
      ["date"]=>
      int(1490611862)
      ["message"]=>
      string(39) "hello world!"
    }
    ["pts"]=>
    int(801)
    ["pts_count"]=>
    int(1)
  }
}

```

### output 

```php
[ref]
ref.update_id.297
ref.update._.updateNewChannelMessage
ref.message._.message
ref.message.out.
ref.message.mentioned.
ref.message.media_unread.
ref.message.silent.
ref.message.post.
ref.message.id.652
ref.message.from_id.373018943
ref.to_id._.peerChannel
ref.to_id.channel_id.1110285821
ref.message.date.1490611862
ref.message.message.hello world!
ref.update.pts.801
ref.update.pts_count.1
```
