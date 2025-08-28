<?php
// Simple PHP example: book list with search by name

// 1) Data source: 10 books
$books = [
  [
    'id' => 1,
    'name' => 'The Pragmatic Programmer',
    'author' => 'Andrew Hunt, David Thomas',
    'price' => 39.99,
    'image' => 'https://placehold.co/120x160?text=Pragmatic'
  ],
  [
    'id' => 2,
    'name' => 'Clean Code',
    'author' => 'Robert C. Martin',
    'price' => 34.95,
    'image' => 'https://placehold.co/120x160?text=Clean+Code'
  ],
  [
    'id' => 3,
    'name' => 'Introduction to Algorithms',
    'author' => 'Thomas H. Cormen et al.',
    'price' => 89.50,
    'image' => 'https://placehold.co/120x160?text=CLRS'
  ],
  [
    'id' => 4,
    'name' => 'Design Patterns',
    'author' => 'Erich Gamma et al.',
    'price' => 49.00,
    'image' => 'https://placehold.co/120x160?text=GoF'
  ],
  [
    'id' => 5,
    'name' => 'Refactoring',
    'author' => 'Martin Fowler',
    'price' => 45.00,
    'image' => 'https://placehold.co/120x160?text=Refactoring'
  ],
  [
    'id' => 6,
    'name' => "You Don't Know JS",
    'author' => 'Kyle Simpson',
    'price' => 29.95,
    'image' => 'https://placehold.co/120x160?text=YDKJS'
  ],
  [
    'id' => 7,
    'name' => 'JavaScript: The Good Parts',
    'author' => 'Douglas Crockford',
    'price' => 24.99,
    'image' => 'https://placehold.co/120x160?text=JS+Good+Parts'
  ],
  [
    'id' => 8,
    'name' => 'Eloquent JavaScript',
    'author' => 'Marijn Haverbeke',
    'price' => 27.00,
    'image' => 'https://placehold.co/120x160?text=Eloquent+JS'
  ],
  [
    'id' => 9,
    'name' => 'Cracking the Coding Interview',
    'author' => 'Gayle Laakmann McDowell',
    'price' => 39.95,
    'image' => 'https://placehold.co/120x160?text=CTCI'
  ],
  [
    'id' => 10,
    'name' => 'The Mythical Man-Month',
    'author' => 'Frederick P. Brooks Jr.',
    'price' => 22.50,
    'image' => 'https://placehold.co/120x160?text=MMM'
  ],
];

// 2) Utilities
function escape(string $value): string {
  return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// 3) Search handling (by book name)
$query = isset($_GET['q']) ? trim((string)$_GET['q']) : '';
$filteredBooks = $query === ''
  ? []
  : array_values(array_filter($books, function (array $book) use ($query): bool {
      return stripos($book['name'], $query) !== false; // case-insensitive match in name
    }));

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Book List (PHP + Search)</title>
    <style>
      :root { color-scheme: light dark; }
      body {
        font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji";
        margin: 2rem;
        line-height: 1.5;
      }
      h1 { margin: 0 0 1rem; font-size: 1.6rem; }
      form.search {
        display: flex;
        gap: 0.5rem;
        align-items: center;
        margin-bottom: 1rem;
        flex-wrap: wrap;
      }
      form.search input[type="text"] {
        padding: 0.5rem 0.6rem;
        min-width: 260px;
      }
      form.search button, form.search a.reset {
        padding: 0.5rem 0.75rem;
        text-decoration: none;
        border: 1px solid #8884;
        border-radius: 6px;
        background: #f6f6f6;
        color: inherit;
      }
      form.search a.reset { display: inline-block; }
      table {
        border-collapse: collapse;
        width: 100%;
        background: #fff1;
      }
      thead th {
        text-align: left;
        border-bottom: 2px solid #0003;
        padding: 0.6rem 0.5rem;
      }
      tbody td {
        border-bottom: 1px solid #0002;
        padding: 0.6rem 0.5rem;
        vertical-align: top;
      }
      tbody tr:hover { background: #0001; }
      td.image { width: 84px; }
      td.image img {
        width: 60px;
        height: 80px;
        object-fit: cover;
        display: block;
        border-radius: 4px;
      }
      .meta { color: #555; font-size: 0.92rem; }
      .price { font-weight: 600; }
      .muted { color: #777; }
    </style>
  </head>
  <body>
    <h1>Books</h1>

    <form method="get" class="search" action="">
      <label for="q">Search by book name:</label>
      <input
        type="text"
        id="q"
        name="q"
        placeholder="Type a book name..."
        value="<?php echo escape($query); ?>"
        autocomplete="off"
      />
      <button type="submit">Search</button>
      <?php if ($query !== ''): ?>
        <a class="reset" href="<?php echo escape(strtok($_SERVER['REQUEST_URI'], '?') ?: ''); ?>">Clear</a>
      <?php endif; ?>
    </form>

    <?php if ($query !== ''): ?>
      <p class="meta">Showing <?php echo (int)count($filteredBooks); ?> result(s) for "<strong><?php echo escape($query); ?></strong>".</p>

      <table role="table" aria-label="Books table">
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Book name</th>
            <th scope="col">Author</th>
            <th scope="col">Price</th>
            <th scope="col">ID</th>
          </tr>
        </thead>
        <tbody>
          <?php if (count($filteredBooks) === 0): ?>
            <tr>
              <td colspan="5">No books found.</td>
            </tr>
          <?php else: ?>
            <?php foreach ($filteredBooks as $book): ?>
              <tr>
                <td class="image">
                  <img
                    src="<?php echo escape((string)$book['image']); ?>"
                    alt="<?php echo escape((string)$book['name']); ?> cover"
                    width="60"
                    height="80"
                  />
                </td>
                <td><?php echo escape((string)$book['name']); ?></td>
                <td><?php echo escape((string)$book['author']); ?></td>
                <td class="price">$<?php echo number_format((float)$book['price'], 2); ?></td>
                <td><?php echo (int)$book['id']; ?></td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p class="meta muted">Type a book name and click Search to display matching books.</p>
    <?php endif; ?>
  </body>
</html>

