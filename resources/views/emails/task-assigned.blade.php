<!-- resources/views/emails/task-assigned.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Task Assigned</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f6f8fa; margin: 0; padding: 0;">
    <table width="100%" cellpadding="0" cellspacing="0" style="padding: 40px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="20" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                    <tr>
                        <td>
                            <h2 style="margin-top: 0; color: #333;">👋 Hello {{ $task->user->name }},</h2>
                            <p style="font-size: 16px; color: #555;">
                                You've just been assigned a new task. Here are the details:
                            </p>
                            <table width="100%" cellpadding="10" cellspacing="0" style="background-color: #f9f9f9; border-radius: 6px;">
                                <tr>
                                    <td><strong>📝 Title:</strong></td>
                                    <td>{{ $task->title }}</td>
                                </tr>
                                <tr>
                                    <td><strong>📄 Description:</strong></td>
                                    <td>{{ $task->description }}</td>
                                </tr>
                                <tr>
                                    <td><strong>🚦 Priority:</strong></td>
                                    <td>{{ ucfirst($task->priority) }}</td>
                                </tr>
                                <tr>
                                    <td><strong>📌 Status:</strong></td>
                                    <td>{{ ucfirst($task->status) }}</td>
                                </tr>
                            </table>
                            <p style="margin-top: 20px; font-size: 16px; color: #555;">
                                🔗 Please log in to your account to view and manage this task.
                            </p>
                            <p style="text-align: center; margin: 30px 0;">
                                <a href="{{ route('tasks.show', $task) }}" style="display: inline-block; padding: 12px 24px; background-color: #4CAF50; color: #fff; text-decoration: none; border-radius: 6px; font-weight: bold;">
                                    View Task
                                </a>
                            </p>
                            <p style="margin-top: 30px; font-size: 14px; color: #999;">
                                — Task Manager App
                            </p>
                        </td>
                    </tr>
                </table>
                <p style="margin-top: 20px; font-size: 12px; color: #ccc;">
                    This is an automated message. Please do not reply to this email.
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
