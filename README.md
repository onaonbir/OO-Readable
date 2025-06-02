# OOReadable

**OOReadable** is a lightweight and expressive Laravel helper package to format numbers, dates, durations, and file sizes into human-readable formats.

---

## 📦 Installation

```bash
composer require onaonbir/oo-readable
````

Laravel 10+ and PHP 8.3+ are required.

---

## 🚀 Features

* Format numbers with thousands separator
* Convert large numbers into short notations (e.g. `1.2K`, `3.4M`)
* Convert numbers to words (e.g. `42` → `forty-two`)
* Format decimal numbers, auto-handle integers
* Human-readable durations (`3 hours 25 mins`)
* Human-friendly time diff (`2 days ago`)
* File size formatting (`1.42 MB`)

---

## 🧰 Usage

You can either use the static class or helper functions.

### 🔢 Number Formatting

```php
Readable::getNumber(1200000);             // "1,200,000"
Readable::getHumanNumber(1250000);        // "1M"
Readable::getDecimal(1234.567);           // "1,234.57"
Readable::getDecInt(1234.00);             // "1,234"
Readable::getNumberToString(456);         // "four hundred fifty-six"
```

Or via global helpers:

```php
ReadableNumber(99999);
ReadableHumanNumber(150000);
ReadableDecimal(1234.5678);
ReadableNumberToString(42, 'tr'); // "kırk iki"
```

---

### 🕒 Date & Time Formatting

```php
Readable::getDate('2024-01-01');                  // "1 January 2024"
Readable::getTime(now(), true);                   // "04:52 PM"
Readable::getDateTime(now());                     // "Monday, June 2, 2025 16:52"
Readable::getDiffDateTime(now()->subMinutes(30)); // "30 minutes ago"
Readable::getTimeLength(4000);                    // "1 hour 6 minutes 40 seconds"
```

You can also use Blade directives:

```blade
@ReadableDateTime($model->created_at)
@ReadableHumanNumber($user->follower_count)
@ReadableSize($file->size)
```

---

### 💾 File Size

```php
Readable::getSize(1024);         // "1.02 KB"
Readable::getSize(1536000);      // "1.54 MB"
```

---

## 🧪 Testing

```bash
composer test
```

> Tests coming soon...

---

## 📚 Blade Directives

All helper functions are also available as Blade directives:

| Directive                           | Description                 |
| ----------------------------------- | --------------------------- |
| `@ReadableNumber($value)`           | Standard number format      |
| `@ReadableHumanNumber($value)`      | Short human-readable format |
| `@ReadableNumberToString($value)`   | Number to words             |
| `@ReadableDecimal($value)`          | Fixed decimal               |
| `@ReadableDecInt($value)`           | Intelligent decimal/integer |
| `@ReadableDate($date)`              | Human date                  |
| `@ReadableTime($date)`              | Human time                  |
| `@ReadableDateTime($date)`          | DateTime                    |
| `@ReadableDiffDateTime($old, $new)` | Time difference             |
| `@ReadableTimeLength($seconds)`     | Duration                    |
| `@ReadableDateTimeLength($a, $b)`   | Duration between dates      |
| `@ReadableSize($bytes)`             | File size                   |


---

### 🙏 Special Thanks

This package was inspired by [Pharaonic/laravel-readable](https://github.com/Pharaonic/laravel-readable).  
Huge thanks to the original author for their contribution to the Laravel ecosystem.
