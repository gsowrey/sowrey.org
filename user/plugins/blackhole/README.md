![Blackhole](https://user-images.githubusercontent.com/5648875/33234047-8bd21c26-d1e5-11e7-80d3-aa98f22235c6.png)

The **⚫ Blackhole** Plugin is for [Grav CMS](http://github.com/getgrav/grav).

## Description

Why Blackhole? Grav is a space term, so I think this plugin should follow suit. Time stops at the event horizon of a black hole, which is exactly what this plugin does to your website. It freezes it in a state. By Increasing **grav**ity to infinity you get a **static** black hole, or in this case you generate a **static** html copy of your **Grav** website.

## Installation

### GPM Installation

The simplest way to install this plugin is via the Grav Package Manager (GPM). From the root of your Grav install type:
`bin/gpm install blackhole`

### Manual Installation

If you can't use GPM you can manually install this plugin. Download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`, then rename the folder to `blackhole`.

## Usage

Absolute URLs must be enabled in Grav System Configuration.

### Generate Command

The generate command can be used from the command line or directly in the Grav Admin Panel. Generate your static site. `generate` can also be written as `gen` or `g`.

- **Input URL** (required) - Enter the URL to your live Grav site.

```bash
bin/plugin blackhole generate http://localhost/grav
```

#### Options

- **Output URL** `--output-url` or `-d`
  The URL of your static site. This determines the domain used in the absolute path of your links.

  ```bash
  --output-url https://website.com
  ```

- **Output Path** `--output-path` or `-p`
  The directory to which your static site will be written (relative to Grav root).

  ```bash
  --output-path ../build
  ```

- **Routes** `--routes` or `-r`
  Limit generation to a select list of page routes.

  ```bash
  --routes home,about,about/contact
  ```

- **Simultaneous Limit** `--simultaneous` or `-s`
  Determine how many files will generate at the same time (default: 10).

  ```bash
  --simultaneous 10
  ```

- **Assets** `--assets` or `-a`
  Copy assets to the output path.

- **Force** `--force` or `-f`
  Overwrite previously generated files.

- **Verbose Mode** `--verbose-mode`
  Enable verbose mode.

## Author

<table>
  <thead>
    <tr>
      <th valign="middle" align="center">
        <a href="https://barrymode.com"><img alt="BarryMode" src="https://avatars3.githubusercontent.com/u/5648875?v=2&s=200" width="100" height="100"></a>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td valign="middle" align="center">
        <a href="https://barrymode.com"><strong>BarryMode</strong></a><br>
        <a href="https://www.youtube.com/barrymode"><img src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/youtube.svg" width="16" height="16"></a> <a href="https://github.com/barrymode"><img src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/github.svg" width="16" height="16"></a>
      </td>
    </tr>
  </tbody>
</table>

