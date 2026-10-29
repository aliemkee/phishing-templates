# phishing-templates

## Project overview

This repository contains a small collection of legacy HTML, PHP, CSS, and image
files organized into brand-named folders. Several pages and assets imitate
third-party services and resemble login or account workflows. Treat the
repository as **untrusted and potentially credential-collection capable**:
the source has not been audited here, and file names alone cannot establish
what its server-side code does.

This document describes the repository as it exists. It does not provide
instructions for publishing, hosting, configuring, or using the pages to
impersonate services or collect information.

## Important safety notice

- Do not deploy these files to a public or production-facing server.
- Do not enter real passwords, recovery codes, payment details, personal
  information, or other secrets into any page in this repository.
- Do not use the pages to impersonate a person, organization, or service, or
  to contact people under false pretenses.
- If the files are being retained for authorized defensive research, keep them
  in access-controlled storage and follow your organization's legal, privacy,
  and incident-response requirements.
- Before opening or analyzing any server-side file, use an isolated,
  non-networked environment and follow your organization's malware-handling
  procedures. Do not assume that a file is harmless because it is short or
  has a familiar extension.

## Repository contents

The project is organized by top-level directory:

| Directory | Contents visible in the repository |
| --- | --- |
| `adobe/` | PHP and other page files whose names include `index`, `ip`, and `login`. |
| `amazon/` | HTML and PHP page files, including `index`, `ip`, and `login`. |
| `apple/` | HTML and PHP page files, a larger set of account/workflow-named PHP files, and an `images/` directory containing CSS, image, and other static assets. |
| `badoo/` | HTML and PHP page files whose names include `index`, `ip`, and `login`. |
| `facebook/` | HTML and PHP page files and an `images/` directory containing SVG assets. |
| `wifi/` | HTML and PHP page files whose names include `index`, `ip`, and `login`. |

The directory and file names are an inventory, not a guarantee of purpose or
behavior. In particular, PHP files must be treated as executable server-side
code and reviewed before any authorized analysis.

## Technology and project status

- The checked-in files are primarily legacy PHP, HTML, CSS, and static assets.
- The repository does not currently include a Vue 3 application structure or
  the usual JavaScript package/build manifests.
- No automated test suite, build configuration, or documented application
  configuration is present in the inventoried project files.
- This README documents the existing repository; it does not certify that the
  files are safe, functional, complete, or compatible with any current runtime.

## Defensive review guidance

For an authorized security or incident-response review:

1. Preserve the repository as evidence and record its origin and handling
   history according to local policy.
2. Review source files without submitting real or test credentials to them.
3. Determine whether server-side code reads, stores, forwards, or exposes
   submitted data before taking any further action. This README makes no
   findings about those behaviors.
4. Check for third-party assets, personal data, secrets, and licensing or
   attribution obligations before redistribution.
5. If the repository was found in an environment where it may have been used
   against people, follow the applicable incident-response and reporting
   processes.

## Scope and limitations

This documentation is based on the repository's visible file and directory
inventory. It is not a source-code audit, malware analysis, legal review,
license determination, or assurance that the pages do or do not transmit data.
No execution or deployment guidance is provided.

## License and attribution

No license or provenance information was identified in the inventoried
repository files. Do not assume that the code or bundled brand-related assets
are licensed for reuse or redistribution. Establish provenance and obtain
appropriate permission before reusing or sharing them.
