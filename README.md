# 6A ThingsToDo

This is the source code for running an Apache Server to provide an overview and help coordinate workload for students of 6A during the Coronavirus break. For the time being it is specifically tailored to this usecase, but it can easily be customized to more general situations.

## Configuration
The setup requires creating a file named ``password.txt`` in the root directory. This file should only contain the password for logging in.

## Data
Create a folder called ``data``.

### Work
Within the ``data`` folder, create a folder called ``work``. Place a file called ``work.txt`` into this folder.
In it you can note down work using the following structure:

Subject | ID | Description | Resource | Deadline

The ID must be a unique number or string and once it is set, it may not be changed, as it is used for storing progress.

### Users
Within the ``data`` folder, create a folder called ``users``. Create files named like the user (without a file extension). Enter the subjects for this user, separated by a comma. You can optionally also enter groups in square brackets.

### Groups (optional)
If desired you can define groups, a collection of subjects, accessible with just their name, so it is not necessary to write dozens of common subjects into the user files.
Within the ``data`` folder, create a folder called ``groups``. Create files named like the groups of subjects (without a file extension). Enter the subjects of this group, separated by a comma.

## Specials (optional)

### Subjects
This data type was designed to enable automatic calculation for the next lesson after the school begins again, since this date was not fixed for a long time at still might be changed.
Within the ``data`` folder, a folder named ``subjects`` can be created. Within it, there should be a file named ``subjects.txt``. Subjects can be entered using the following structure:

Subject | 3-letter-weekdays separated by commas (Mon, Tue, ...)

### Conferences (WIP)
